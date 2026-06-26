<?php

include_once("claseConexion.php");
include_once("classAspirante.php");

class crudReAspirante extends Conexion {

    function __construct(){
        parent::__construct();
    }
    

    function registrar($objAspirante){
        $sql_insert = "INSERT INTO aspirante(curp, id_carrera, id_club, nombre, apellido_p, apellido_m, fecha_nac, telefono, correo, calle, colonia, municipio, no_int, no_ext) 
                       VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt_insert = parent::getObjetoCon()->prepare($sql_insert);
        $stmt_insert->bindParam(1, $objAspirante->curp);
        $stmt_insert->bindParam(2, $objAspirante->id_carrera);
        $stmt_insert->bindParam(3, $objAspirante->id_club);
        $stmt_insert->bindParam(4, $objAspirante->nombre);
        $stmt_insert->bindParam(5, $objAspirante->apellido_p);
        $stmt_insert->bindParam(6, $objAspirante->apellido_m);
        $stmt_insert->bindParam(7, $objAspirante->fecha_nac);
        $stmt_insert->bindParam(8, $objAspirante->telefono);
        $stmt_insert->bindParam(9, $objAspirante->correo);
        $stmt_insert->bindParam(10, $objAspirante->calle);
        $stmt_insert->bindParam(11, $objAspirante->colonia);
        $stmt_insert->bindParam(12, $objAspirante->municipio);
        $stmt_insert->bindParam(13, $objAspirante->no_int);
        $stmt_insert->bindParam(14, $objAspirante->no_ext);

        $stmt_insert->execute();

        if ($stmt_insert->rowCount() > 0) {
            return ""; 
        } else {
            return "Error al registrar el aspirante"; 
        }
    }
}

?>