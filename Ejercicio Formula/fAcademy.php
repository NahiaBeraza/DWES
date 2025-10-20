<?php
    class FAcademy5 extends Monoplaza{
        private $potenciaMaxima;

        //CONSTRUCTOR
    
        public function __construct($nombre, $nacionalidad, $numero, $escuderia, $puntos, $potenciaMaxima) {

            parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);

            $this->potenciaMaxima = $potenciaMaxima;

        }

        //GETTERS Y SETTERS
        public function setPotenciaMaxima($potenciaMaxima){
            $this->potenciaMaxima=$potenciaMaxima;
        }

        public function getPotenciaMaxima(){
            return $this->potenciaMaxima;
        }

        //METODOS
         public function otorgarPuntos(int $posicion, bool $vueltaRapida){
            $tabla=[18,15,12,10,8,6,4,2,1,0];

            $puntosGanados=0;
            if(posicionValida($posicion)){
                if($posicion>=10){
                    $this-> puntos= $this->puntos+ $puntosGanados;

                }else{

                    if($vueltaRapida){
                        $puntosGanados=$tabla[$posicion-1];
                        $this-> puntos= $this->puntos+ $puntosGanados + 1;
                        
                    }else{

                        $puntosGanados=$tabla[$posicion-1];
                        $this-> puntos= $this->puntos+ $puntosGanados;
                    }
                }
            }


        }

        public function posicionValida(int $posicion) {
            return $posicion >= 1 && $posicion <= 18;
        }

        public function subirCategoria(string $pais) {
            echo "Subiendo de FAcademy a F4...";

            return new F4(
                $this->nombrePiloto,
                $this->nacionalidad,
                $this->numero,
                $this->escuderia,
                $this->puntos,
                $pais
            );
        }
    }
?>