    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>TechOwl</title>
        <link rel="shortcut icon" href="../Imagenes/Icono.png">
        <link rel="stylesheet" href="../css/estilos_formulario1-1.css">
        <script src="../js/sweetalert2.all.min.js"></script>
    
    </head>
    <body>
        <header>
        <div class="header-div"><img src="../Imagenes/Icono.png" alt="ERROR" class="buho">
        <div class="menu_header">TechOwl</div></div>
        </header>
        <div class="divform" >
    <form action="./recibeSesion.php" method="POST" id="form" >
    <div class="h2"><h2 class="title">Inicio de sesión de aspirantes</h2></div>
        <div class="form-group">
                <span>CORREO</span>
            <input type="email" placeholder="Correo Electronico"  name ="email" id="email" >
            <p class="warnings" id="warnings1"></p>
            </div>
        <div class="form-group">
                <span>CONTRASEÑA</span>
            <input type="password" placeholder="Contraseña" name="pass" id="password">
            <p class="warnings" id="warnings2"></p>
            </div>
        
        <div class="button">
            <input type="submit" value="Enviar">
            <p class="warnings" id="warnings3"></p>
        </div>
        
        <br><br><br>
    <a href="./Form2_reUsuario.php">No tengo una cuenta</a><br><br><br>

    <?php  
        if (isset($_REQUEST['error'])){
            echo "<h3 class='errorDatos' ><img src='../Imagenes/Validaciones/Error.png' alt='ERROR' class='imgError'>".$_REQUEST['error']."</h3>";
                }else{
                    
                }
    ?>
    </form>
    </div>
    </body>
    </html>
    <?php
    include_once("classUsuario.php");
    include_once("crudReUsuario.php");

    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $correo = isset($_POST["correo"]) ? $_POST["correo"] : "";
        $contrasena = isset($_POST["passw"]) ? $_POST["passw"] : "";


        if (!empty($correo) && !empty($contrasena)) {
            $objUsuario = new usuario(1, $correo, $contrasena);
            $objT = new crudReUsuario();
            $objT->registrar($objUsuario);
        }
    }
    ?>


