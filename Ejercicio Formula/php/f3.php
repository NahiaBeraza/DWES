<?php
    class F3 extends Monoplaza{
        private $academia;

        //CONSTRUCTOR
        public function __construct($nombre, $nacionalidad, $numero, $escuderia, $puntos, $academia) {

            parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);

            $this->academia = $academia;

        }

        //GETTERS Y SETTERS
        public function setAcademia($academia){
            $this->academia=$academia;
        }

        public function getAcademia(){
            return $this->academia;
        }

        //METODOS

        public function otorgarPuntos(int $posicion){
            $tabla=[10,8,7,6,5,4,3,2,1,0];

            $puntosGanados=0;
            if(posicionValida($posicion)){
                if($posicion>=10){
                    $this-> puntos= $this->puntos+ $puntosGanados;

                }else{

                    $puntosGanados=$tabla[$posicion-1];
                    $this-> puntos= $this->puntos+ $puntosGanados;
                    
                }
            }


        }

        public function posicionValida(int $posicion) {
            return $posicion >= 1 && $posicion <= 30;
        }

        public function subirCategoria($minimoDePuntos) {
            echo "Subiendo de F3 a F2...";
            
            return new F2(
                $this->nombrePiloto,
                $this->nacionalidad,
                $this->numero,
                $this->escuderia,
                $this->puntos,
                $minimoDePuntos
            );
        }
    }
?>