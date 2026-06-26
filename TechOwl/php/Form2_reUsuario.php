<?php
include_once("classUsuario.php");
include_once("crudReUsuario.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $correo = isset($_POST["correo"]) ? $_POST["correo"] : "";
    $contrasena = isset($_POST["passw"]) ? $_POST["passw"] : "";

    if (!empty($correo) && !empty($contrasena)) {
        $objT = new crudReUsuario();

        $error = $objT->registrar(new usuario(1, $correo, $contrasena));

        if (!empty($error)) {

            header("Location: ./Form2_reUsuario.php?error=" . urlencode($error));
            exit();
        } else {

            header("Location: ./Form2_reUsuario.php?success=1");
            exit();
        }
    } else {

        $error = "Por favor, complete todos los campos";
        header("Location: ./Form2_reUsuario.php?error=" . urlencode($error));
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechOwl - Registro de Usuario</title>
    <link rel="shortcut icon" href="../Imagenes/Icono.png">
    <link rel="stylesheet" href="../css/estilos_form2-2-2.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
    <header>
        <img src="../Imagenes/Icono.png" alt="ERROR" class="buho">
        <div class="menu_header">TechOwl</div>
    </header>
    <div class="divform">
        <form id="emailForm" action="./Form2_reUsuario.php" method="POST">
            <div class="h2"><h2 class="title">Registro de Usuario</h2></div>
            <div class="form-group">
                <span>CORREO</span>
                <input type="email" id="correo" placeholder="Correo Electrónico" name="correo" maxlength="50" required>
                <span id="emailError" style="color: #839192; display: none;">Por favor ingresa un correo electrónico válido de Gmail, Hotmail u Outlook que termine en .com</span>
            </div>
            <div class="form-group">
                <span>CONTRASEÑA</span>
                <input type="password" id="contrasena" placeholder="Contraseña" name="passw"  maxlength="25" required>
                <span id="passwordError" style="color:  #839192; display: none;">La contraseña debe tener entre 5 y 20 caracteres, al menos una mayúscula, un carácter especial y un número.</span>
            </div>
            <div class="button">
                <input type="submit" value="Registrar">
            </div>
            <br><br><br>
            <a href="./Index.php">Iniciar sesión</a><br><br><br>
            <?php
            if (isset($_REQUEST['error'])){
                echo "<h2 class='errorDatos'><img src='../Imagenes/Validaciones/Error.png' alt='ERROR' class='imgError'>".$_REQUEST['error']."</h2>";
            }
            ?>
        </form>
    </div>
    <script>
        document.getElementById('emailForm').addEventListener('submit', function(event) {
            var emailInput = document.getElementById('correo');
            var emailError = document.getElementById('emailError');
            var emailValue = emailInput.value;

            // Expresión regular para permitir solo correos de Gmail, Hotmail y Outlook
            var emailPattern = /^[a-zA-Z0-9._%+-]+@(gmail\.com|hotmail\.com|outlook\.com)$/;

            if (!emailPattern.test(emailValue)) {
                emailError.style.display = 'block';
                event.preventDefault(); // Prevenir el envío del formulario
            } else {
                emailError.style.display = 'none';
            }

            var passwordInput = document.getElementById('contrasena');
            var passwordError = document.getElementById('passwordError');
            var passwordValue = passwordInput.value;

            // Expresión regular para la contraseña
            var passwordPattern = /^(?=.*[A-Z])(?=.*[!@#$%^&*_\-])(?=.*\d)[A-Za-z\d!@#$%^&*_\-]{5,20}$/;

            if (!passwordPattern.test(passwordValue)) {
                passwordError.style.display = 'block';
                event.preventDefault(); // Prevenir el envío del formulario
            } else {
                passwordError.style.display = 'none';
            }
        });

        // Verifica si el parámetro 'success' está en la URL
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('success')) {
                Swal.fire({
                    title: '¡Registro Exitoso!',
                    text: 'Tu cuenta ha sido creada exitosamente.',
                    icon: 'success',
                    confirmButtonText: 'Aceptar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirigir al usuario a la página de inicio
                        window.location.href = './Index.php';
                    }
                });
            }
        });
    </script>
</body>
</html>