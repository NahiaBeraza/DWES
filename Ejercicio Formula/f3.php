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
    }
?>