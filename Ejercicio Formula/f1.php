<?php
    class F1 extends Monoplaza{
        private $patrocinadorPrincipal;

        //CONSTRUCTOR

        public function __construct($nombre, $nacionalidad, $numero, $escuderia, $puntos, $patrocinadorPrincipal) {

            parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);

            $this->patrocinadorPrincipal = $patrocinadorPrincipal;

        }

        //GETTERS Y SETTERS

        public function setPatrocinadorPrincipal($patrocinadorPrincipal){
            $this->patrocinadorPrincipal=$patrocinadorPrincipal;
        }

        public function getPatrocinadorPrincipal(){
            return $this->patrocinadorPrincipal;
        }

        //METODOS

        public function otorgarPuntos(int $posicion, bool $vueltaRapida){
            $tabla=[25,18,15,12,10,8,6,4,2,1,0];

            $puntosGanados=0;
            if(posicionValida($posicion)){
                if($posicion>=11){
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
            return $posicion >= 1 && $posicion <= 22;
        }

        public function subirCategoria() {
            echo "Estas en la categoria más alta";
        }
    }
?>