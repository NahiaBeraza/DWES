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
    }
?>