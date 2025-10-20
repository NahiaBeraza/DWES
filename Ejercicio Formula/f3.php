<?php
    class F3 extends Monoplaza{
        private $academia;

        //CONSTRUCTOR
        public function __construct($academia){
             $this->paisacademia=$academia;
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