<?php
    class F4 extends Monoplaza{
        private $pais;

        //CONSTRUCTOR
        public function __construct($nombre, $nacionalidad, $numero, $escuderia, $puntos, $pais) {

            parent::__construct($nombre, $nacionalidad, $numero, $escuderia, $puntos);

            $this->pais = $pais;

        }

        //GETTERS Y SETTERS

        public function setPais($pais){
            $this->pais=$pais;
        }

        public function getPais(){
            return $this->pais;
        }

        //METODOS

        public function otorgarPuntos(int $posicion){
            $tabla=[25,18,15,12,10,8,6,4,2,1,0];

            $puntosGanados=0;
            if(posicionValida($posicion)){
                if($posicion>=11){
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
        
        public function subirCategoria(string $academia) {
            echo "Subiendo de F4 a F3...";
            
            return new F3(
                $this->nombrePiloto,
                $this->nacionalidad,
                $this->numero,
                $this->escuderia,
                $this->puntos,
                $academia
            );
        }
        
    }
?>