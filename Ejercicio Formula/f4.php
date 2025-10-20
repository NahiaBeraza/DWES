<?php
    class F4 extends Monoplaza{
        private $pais;

        //CONSTRUCTOR
        public function __construct($pais){
             $this->pais=$pais;
        }

        //GETTERS Y SETTERS

        public function setPais($pais){
            $this->pais=$pais;
        }

        public function getPais(){
            return $this->pais;
        }

        
    }
?>