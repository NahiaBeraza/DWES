<?php
    class F1 extends Monoplaza{
        private $patrocinadorPrincipal;

        //CONSTRUCTOR

        public function __construct($patrocinadorPrincipal){
             $this->patrocinadorPrincipal=$patrocinadorPrincipal;
        }

        //GETTERS Y SETTERS
        
        public function setPatrocinadorPrincipal($patrocinadorPrincipal){
            $this->patrocinadorPrincipal=$patrocinadorPrincipal;
        }

        public function getPatrocinadorPrincipal(){
            return $this->patrocinadorPrincipal;
        }
    }
?>