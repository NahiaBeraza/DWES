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
    }
?>