<?php
    include_once("crudReUsuario.php");
    $correo = $_POST["email"];
    $contrasena=$_POST["pass"];


        $crud = new crudReUsuario();
        $stmt= $crud->iniciarSesion($correo,$contrasena);
        $res = $stmt->rowCount();
        echo "<br>".$res;

    if($res>0){
        header("location:./Inicio.php");
    }else{
        $e = "Error en los datos";
    header("location:./Index.php?error=$e");

    }


    ?>
