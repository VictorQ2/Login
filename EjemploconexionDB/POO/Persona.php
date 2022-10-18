<?php
    class Persona{
        private $id;
        private $usuario;
        private $nombre;
        private $contrasena;

        //Constructor................
        public function __construct()
        {
            $this->id = 0;
            $this->usuario = null;
            $this->nombre = "vacio";
            $this->contrasena = null;
        }
        //SET..............
        public function setID($_id){
            $this->id = $_id;
        }

        public function setNombre($_nombre){
            $this->nombre = $_nombre;
        }

        public function setContra($_contrasena){
            $this->contrasena = $_contrasena;
        }

        public function setUsuario($_usuario){
            $this->usuario = $_usuario;
        }
        //GET...........
        public function getID(){
            return $this->id;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getContra(){
            return $this->contrasena;
        }

        public function getUsuario(){
            return $this->usuario;
        }


    }

?>