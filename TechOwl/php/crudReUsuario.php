<?php
include_once("claseConexion.php");
include_once("classUsuario.php");

class crudReUsuario extends Conexion {

    function __construct(){
        parent::__construct();
    }

    function registrar($objUsuario){
        // Verificar si el correo ya existe en la base de datos
        $sql_check = "SELECT * FROM usuario WHERE correo = ?";
        $stmt_check = parent::getObjetoCon()->prepare($sql_check);
        $stmt_check->bindParam(1, $objUsuario->correo);
        $stmt_check->execute();

        if ($stmt_check->rowCount() > 0) {
            return "El correo electrónico ya está registrado";
        } else {
       
            $sql_insert = "INSERT INTO usuario(correo, contrasena) VALUES (?, ?)";
            $stmt_insert = parent::getObjetoCon()->prepare($sql_insert);
            $stmt_insert->bindParam(1, $objUsuario->correo);
            $stmt_insert->bindParam(2, $objUsuario->contrasena);
            $stmt_insert->execute();
            return ""; 
        }
    }

    function iniciarSesion($correo, $contrasena){
        $sql = "SELECT * FROM usuario WHERE correo = ? AND contrasena = ?";
        $stmt = parent::getObjetoCon()->prepare($sql);
        $stmt->bindParam(1, $correo);
        $stmt->bindParam(2, $contrasena);
        $stmt->execute();
        return $stmt;
    }
}

?>