<?php
    class F2 extends Monoplaza{
        private $minimoDePuntos=false;
        
        //CONSTRUCTOR
        public function __construct($minimoDePuntos){
             $this->minimoDePuntos=$minimoDePuntos;
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