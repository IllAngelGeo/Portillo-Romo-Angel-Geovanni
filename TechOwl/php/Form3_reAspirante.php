<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TechOwl</title>
    <link rel="shortcut icon" href="../Imagenes/Icono.png">
    <link rel="stylesheet" href="../css/estilos_form333.css">
    <script src="../js/sweetalert2.all.min.js"></script>
    <script src="../js/script_form3.js" defer></script>
    <style>
        .error-message {
            color: #ff0000;
            display: none;
            font-size: 0.875em;
            margin-top: 0.25em;
        }
    </style>
</head>
<body>
    <header>
        <img src="../Imagenes/Icono.png" alt="No sirve" class="buho">
        <div class="menu_header">TechOwl</div>
        <div class="menu-container">
            <li><br><img src="../Imagenes/menu.png" alt="ERROR" class="imgm">
            <ul class="menu">
                <li><a href="./Inicio.php"><b>INICIO<img src="../Imagenes/Inicio.png" alt=""></b></a></li>
                <li><a href="./Carreras.php"><b>CARRERAS<img src="../Imagenes/carreras.png" alt=""></b></a></li>
                <li><a href="./Clubes.php"><b>CLUBES<img src="../Imagenes/Clubes.png" alt=""></b></a></li>
            </ul>
            </li>
        </div>
    </header>
    <section>
        <div class="container">
            <div class="title-div">
                <div class="title">Registro</div>
            </div>
            <form id="form3" action="./Form3_reAspirante.php" method="POST">
                <div class="form-group">
                    <span class="span-class">Nombre</span>
                    <input type="text" placeholder="Ingrese Nombre" name="nombre" id="nombre" maxlength="19" required>
                    <span id="nombreError" class="error-message">El nombre solo debe contener letras y espacios.</span>
                </div>
                <div class="form-group">
                    <span class="span-class">CURP</span>
                    <input type="text" placeholder="Ingrese CURP" name="curp" id="curp" maxlength="20" required>
                    <span id="curpError" class="error-message">El CURP ingresado no es válido.</span>
                </div>
                <div class="form-group">
                    <span class="span-class">Apellido Paterno</span>
                    <input type="text" placeholder="Ingrese Apellido Paterno" name="ap" id="ap"  maxlength="19" required>
                    <span id="apError" class="error-message">El apellido paterno solo debe contener letras y espacios.</span>
                </div>
                <div class="form-group">
                    <span class="span-class">Apellido Materno</span>
                    <input type="text" placeholder="Ingrese Apellido Materno" name="am" id="am"  maxlength="19" required>
                    <span id="amError" class="error-message">El apellido materno solo debe contener letras y espacios.</span>
                </div>
                <div class="form-group">
                    <span class="span-class">Fecha de nacimiento</span>
                    <input type="date" placeholder="Ingrese Fecha de Nacimiento" name="fn" id="fn"  required>
                    <span id="fnError" class="error-message">Debes tener al menos 17 años.</span>
                </div>  
                <div class="form-group">
                    <span class="span-class">Teléfono</span>
                    <input type="tel" placeholder="Ingrese Telefono" name="telefono" id="telefono" maxlength="10" required>
                    <span id="telefonoError" class="error-message">Por favor ingresa un número de teléfono válido.</span>
                </div>
                <div class="form-group">
                    <span class="span-class">Correo</span>
                    <input type="email" placeholder="Ingrese Correo Electrónico" name="correo" id="correo" maxlength="30" required>
                    <span id="correoError" class="error-message">Por favor ingresa un correo electrónico válido de Gmail, Hotmail u Outlook que termine en .com</span>
                </div>
                <div class="form-group">
                    <span class="span-class">Calle</span>
                    <input type="text" placeholder="Ingrese Calle" name="calle" id="calle" maxlength="50" required>
                    <span id="calleError" class="error-message">La calle solo debe contener letras, números y espacios.</span>
                </div>
                <div class="form-group">
                    <span class="span-class">Colonia</span>
                    <input type="text" placeholder="Ingrese Colonia" name="col" id="col" maxlength="50" required>
                    <span id="colError" class="error-message">La colonia solo debe contener letras, números y espacios.</span>
                </div>
                <div class="form-group">
                    <span class="span-class">Municipio</span>
                    <input type="text" placeholder="Ingrese Municipio" name="mun" id="mun" maxlength="50" required>
                    <span id="munError" class="error-message">El municipio solo debe contener letras, números y espacios.</span>
                </div>
                <div class="form-group">
                    <span class="span-class">Número Interno</span>
                    <input type="number" placeholder="Ingrese su Número Interno" name="ni" id="ni" required>
                    <span id="niError" class="error-message">El número interno debe tener entre 1 y 5 dígitos.</span>
                </div>
                <div class="form-group">
                    <span class="span-class">Número Externo</span>
                    <input type="number" placeholder="Ingrese su Número Externo" name="ne" id="ne" required>
                    <span id="neError" class="error-message">El número externo debe tener entre 1 y 5 dígitos.</span>
                </div>
                <div class="form-select">
                    <div class="form-group-inline">
                        <span class="span-club">Club al que deseas ingresar (opcional)</span>
                        <select id="opcionesClubes" name="opcionesClubes" class="custom-select-clubes">
                            <option value="">Seleccione un club</option>
                            <option value="1">Ninguno</option>
                            <option value="2">Básquetbol</option>
                            <option value="3">Fútbol</option>
                            <option value="4">Vóleibol</option>
                            <option value="5">Fútbol Americano</option>
                        </select>
                    </div>
                    <div class="form-group-inline">
                        <span class="span-carrera">Carrera a la que deseas ingresar</span>
                        <select id="opcionesCarreras" name="opcionesCarreras" class="custom-select-carreras" required>
                            <option value="">Seleccione una carrera</option>
                            <optgroup label="Tecnologías de la Información y Comunicación">
                                <option value="1">Desarrollo de Software Multiplataforma</option>
                                <option value="2">Infraestructura en Redes Digitales</option>
                            </optgroup>
                            <optgroup label="División de Procesos Industriales">
                                <option value="3">Nanotecnología</option>
                                <option value="4">Procesos Productivos</option>
                            </optgroup>
                            <optgroup label="División Químico-Biológicas">
                                <option value="5">Biotecnología</option>
                            </optgroup>
                            <optgroup label="División Económico Administrativa">
                                <option value="6">Mercadotecnia</option>
                            </optgroup>
                        </select>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Registrar">
                </div>
            </form>
        </div>
    </section>
    <footer>
        Createch
    </footer>
</body>
</html>
<?php
include_once("classAspirante.php");
include_once("crudReAspirante.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $curp = isset($_POST["curp"]) ? $_POST["curp"] : "";
    $id_carrera = isset($_POST["opcionesCarreras"]) ? $_POST["opcionesCarreras"] : "";
    $id_club = isset($_POST["opcionesClubes"]) ? $_POST["opcionesClubes"] : "";

    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $apellido_p = isset($_POST["ap"]) ? $_POST["ap"] : "";
    $apellido_m = isset($_POST["am"]) ? $_POST["am"] : "";
    $fecha_nac = isset($_POST["fn"]) ? $_POST["fn"] : "";
    $telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : "";
    $correo = isset($_POST["correo"]) ? $_POST["correo"] : "";
    $calle = isset($_POST["calle"]) ? $_POST["calle"] : "";
    $colonia = isset($_POST["col"]) ? $_POST["col"] : "";
    $municipio = isset($_POST["mun"]) ? $_POST["mun"] : "";
    $no_int = isset($_POST["ni"]) ? $_POST["ni"] : "";
    $no_ext = isset($_POST["ne"]) ? $_POST["ne"] : "";


    $objAspirante = new Aspirante($curp, $id_carrera, $id_club, $nombre, $apellido_p, $apellido_m, $fecha_nac, $telefono, $correo, $calle, $colonia, $municipio, $no_int, $no_ext);


    $crudAspirante = new crudReAspirante();


    $resultado = $crudAspirante->registrar($objAspirante);


    if ($resultado === "") {

        echo '<script>
                Swal.fire({
                    icon: "success",
                    title: "¡Éxito!",
                    text: "Aspirante registrado correctamente."
                }).then(function() {
                    window.location = "Inicio.php";
                });
              </script>';
    } else {
        echo '<script>
                Swal.fire({
                    icon: "error",
                    title: "¡Error!",
                    html: `
                    <style>
                        .swal2-container {
                            z-index: 9999 !important;
                        }
                        header {
                            position: relative;
                            z-index: 1;
                        }
                    </style>
                    <p>' . $resultado . '</p>
                    <p style="text-align: left;">Por favor verifica que tus datos se ajusten a los siguientes rangos:</p>
                    <ul style="text-align: left;">
                        <li>CURP: exactamente 18 caracteres (No puede ser un CURP ya registrado anteriormente) </li>
                    </ul>
                `,
                footer: "<p style=\'text-align: left;\'>Asegúrate de que todos los campos están completos y correctos.</p>",
                confirmButtonColor: "linear-gradient(rgb(143, 152, 245),rgb(217, 113, 238))",
                confirmButtonText: "Corregir"          
                });
              </script>';
    }
}
?>