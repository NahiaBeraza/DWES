<?php
    class FAcademy5 extends Monoplaza{
        private $potenciaMaxima;

        //CONSTRUCTOR
    
        public function __construct($potenciaMaxima){
             $this->potenciaMaxima=$potenciaMaxima;
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