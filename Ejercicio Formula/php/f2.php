<?php
    class F2 extends Monoplaza{
        private $minimoDePuntos=false;
        
        //CONSTRUCTOR
        public function __construct($nombre, $nacionalidad, $numero, $escuderia, $puntos, $minimoDePuntos) {

            parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);

            $this->minimoDePuntos = $minimoDePuntos;

        }

        //GETTERS Y SETTERS
        public function setMinimoPuntos($minimoPuntos){
            $this->minimoPuntos=$minimoPuntos;
        }

        public function getMinimoPuntos(){
            return $this->minimoPuntos;
        }

        //METODOS

        public function otorgarPuntos(int $posicion, bool $vueltaRapida){
            $tabla=[10,8,7,6,5,4,3,2,1,0];

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
            return $posicion >= 1 && $posicion <= 24;
        }

        public function subirCategoria($patrocinadorPrincipal) {
            echo "Subiendo de F2 a F1...";
            
            return new F1(
                $this->nombrePiloto,
                $this->nacionalidad,
                $this->numero,
                $this->escuderia,
                $this->puntos,
                $patrocinadorPrincipal
            );
        }
    }
?>