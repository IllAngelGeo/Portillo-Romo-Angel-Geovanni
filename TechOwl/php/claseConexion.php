<?php

    include_once("constantes.php");
    class Conexion{
        private $server = SERVIDOR;
        private $user = USUARIO;
        private $bd = BASEDATOS;
        private $password = CONTRASEÑA;
        private $port = PUERTO;
        private $objetoCon;

        function __construct(){
            try{
                $dns="pgsql:host=$this->server;port=$this->port;dbname=$this->bd";
                $this->objetoCon = new PDO($dns,$this->user,$this->password);
                //echo "<br><h5>CONECTADO A LA BASE DE DATOS DE TECHOWL</h5>";

            }catch(PDOException $error){
                echo "<br>Error durante la conexion: ".$error->getMessage();
            }   
        }
        function getObjetoCon(){
            return $this->objetoCon;
        }
    }

      