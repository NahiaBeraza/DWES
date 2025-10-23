<?php

// Función para obtener datos del piloto según su número
//https://algo.mx/2020/04/11/consumiendo-una-api-con-php/
function getDriverData($driverNumber) {

	$curl = curl_init(); // Inicia la sesión cURL

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.openf1.org/v1/drivers?driver_number=" . $driverNumber, // URL de la API
		CURLOPT_RETURNTRANSFER => true, // Devuelve el resultado como cadena
		CURLOPT_FOLLOWLOCATION => true, // Sigue redirecciones
		CURLOPT_ENCODING => "", // Acepta cualquier tipo de codificación
		CURLOPT_MAXREDIRS => 10, // Máximo de redirecciones
		CURLOPT_TIMEOUT => 30, // Tiempo máximo de ejecución
		CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1, // Usa HTTP 1.1
		CURLOPT_CUSTOMREQUEST => "GET", // Petición GET
		CURLOPT_HTTPHEADER => array(
			"Content-Type: application/json"
		), // Cabecera
	));

	$response = curl_exec($curl); // Ejecuta la solicitud
	$err = curl_error($curl); // Guarda el error si ocurre

	curl_close($curl); // Cierra la sesión

	if ($err) {
		echo "cURL Error #: " . $err . "<br>";
		return null;
	} else {
		return json_decode($response, true); // Devuelve el JSON como array asociativo
	}
}

// Pilotos que queremos consultar
$drivers = [16, 44];

echo "<h1>Datos de pilotos F1 - Temporada actual</h1>";

foreach ($drivers as $number) {
	$data = getDriverData($number);

	if ($data && count($data) > 0) {
		$driver = $data[0];

		echo "<div style='border:1px solid #ccc; padding:10px; margin:10px; border-radius:8px;'>";
		echo "<h2>Piloto #" . htmlspecialchars($driver['driver_number']) . "</h2>";
		echo "Nombre: <strong>" . htmlspecialchars($driver['full_name']) . "</strong><br>";
		echo "Nacionalidad: " . htmlspecialchars($driver['country_code']) . "<br>";
		echo "Equipo: " . htmlspecialchars($driver['team_name']) . "<br>";
		echo "</div>";
	} else {
		echo "<p>No se encontraron datos para el piloto número $number.</p>";
	}
}
?>
