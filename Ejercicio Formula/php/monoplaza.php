<?php
    abstract class Monoplaza{
        protected $nombre;
        protected $nacionalidad;
        protected $numero_monoplaza;
        protected $escuderia;
        protected $puntos;

        //CONSTRUCTOR

        public function __construct($nombre, $nacionalidad, $numero_monoplaza, $escuderia,$puntos){
            $this->nombre=$nombre;
            $this->nacionalidad=$nacionalidad;
            $this->numero_monoplaza=$numero_monoplaza;
            $this->escuderia=$escuderia;
            $this->puntos=$puntos;
        }

        //GETTERS Y SETTERS

        public function setNombre($nombre){
            $this->nombre=$nombre;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNacionalidad($nacionalidad){
            $this->nacionalidad=$nacionalidad;
        }

        public function getNacionalidad(){
            return $this->nacionalidad;
        }

        public function setNumeroMonoplaza($numero_monoplaza){
            $this->numero_monoplaza=$numero_monoplaza;
        }

        public function getNumeroMonoplaza(){
            return $this->numero_monoplaza;
        }

        public function setEscuderia($escuderia){
            $this->escuderia=$escuderia;
        }

        public function getEscuderia(){
            return $this->escuderia;
        }

        public function setPuntos($puntos){
            $this->puntos=$puntos;
        }

        public function getPuntos(){
            return $this->puntos;
        }


        //METODOS

        abstract function otorgarPuntos( $posicion, $vueltaRapida);

        abstract function posicionValida($posicion);
    

        




    }
?>