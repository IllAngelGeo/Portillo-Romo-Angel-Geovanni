<?php

    class aspirante{
        public $curp;
        public $id_carrera;
        public $id_club;
        public $nombre;
        public $apellido_p;
        public $apellido_m;
        public $fecha_nac;
        public $telefono;
        public $correo;
        public $calle;
        public $colonia;
        public $municipio;
        public $no_int;
        public $no_ext;
        function __construct($curp,$id_carrera, $id_club,$nombre,$apellido_p,$apellido_m,$fecha_nac,$telefono,$correo,$calle,$colonia,$municipio,$no_int,$no_ext){
            $this->curp = $curp;
            $this->id_carrera= $id_carrera;
            $this->id_club = $id_club;
            $this->nombre = $nombre;
            $this->apellido_p = $apellido_p;
            $this->apellido_m = $apellido_m;
            $this->fecha_nac = $fecha_nac;
            $this->telefono = $telefono;
            $this->correo = $correo;
            $this->calle = $calle;
            $this->colonia = $colonia;
            $this->municipio = $municipio;
            $this->no_int = $no_int;
            $this->no_ext = $no_ext;
        }
    }