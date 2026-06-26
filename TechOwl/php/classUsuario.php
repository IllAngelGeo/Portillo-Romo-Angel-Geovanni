<?php
    class usuario{
        public $id;
        public $correo;
        public $contrasena;
        function __construct($id,$correo,$contrasena){
            $this->id = $id;
            $this->correo = $correo;
            $this->contrasena = $contrasena;
        }
    }