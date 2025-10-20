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
    }
?>