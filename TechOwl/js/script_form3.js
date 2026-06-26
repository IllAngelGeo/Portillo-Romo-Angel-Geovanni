document.getElementById('form3').addEventListener('submit', function(event) {
    // Resetear todos los mensajes de error
    document.querySelectorAll('.error-message').forEach(function(elem) {
        elem.style.display = 'none';
    });

    var isValid = true;

    // Validación de correo electrónico
    var correoInput = document.getElementById('correo');
    var correoError = document.getElementById('correoError');
    var correoValue = correoInput.value.trim();

    // Expresión regular para permitir solo correos de Gmail, Hotmail y Outlook
    var correoPattern = /^[a-zA-Z0-9._%+-]+@(gmail\.com|hotmail\.com|outlook\.com)$/;

    if (!correoPattern.test(correoValue)) {
        correoError.style.display = 'block';
        isValid = false;
    }

    // Validación del teléfono
    var telefonoInput = document.getElementById('telefono');
    var telefonoError = document.getElementById('telefonoError');
    var telefonoValue = telefonoInput.value.trim();

    // Expresión regular para validar el formato del número de teléfono
    var telefonoPattern = /^\d{10}$/; // Ajusta el patrón según el formato deseado

    if (!telefonoPattern.test(telefonoValue)) {
        telefonoError.style.display = 'block';
        isValid = false;
    }

    // Validación de nombre completo
    var nombreInput = document.getElementById('nombre');
    var apInput = document.getElementById('ap');
    var amInput = document.getElementById('am');
    var nombreError = document.getElementById('nombreError');
    var apError = document.getElementById('apError');
    var amError = document.getElementById('amError');
    var nombrePattern = /^[a-zA-Z\s]+$/; // Solo letras y espacios

    if (!nombrePattern.test(nombreInput.value.trim())) {
        nombreError.style.display = 'block';
        isValid = false;
    }

    if (!nombrePattern.test(apInput.value.trim())) {
        apError.style.display = 'block';
        isValid = false;
    }

    if (!nombrePattern.test(amInput.value.trim())) {
        amError.style.display = 'block';
        isValid = false;
    }

// Validación del CURP
var curpInput = document.getElementById('curp');
var curpError = document.getElementById('curpError');
var curpValue = curpInput.value.trim();

// Expresión regular para validar CURP
var curpPattern = /^[A-Z]{4}\d{6}[A-Z]{6}(\d{2}|[A-Z]\d)$/;

if (!curpPattern.test(curpValue)) {
    curpError.style.display = 'block';
    isValid = false;
} else {
    curpError.style.display = 'none';
}

    // Validación de dirección
    var calleInput = document.getElementById('calle');
    var colInput = document.getElementById('col');
    var munInput = document.getElementById('mun');
    var calleError = document.getElementById('calleError');
    var colError = document.getElementById('colError');
    var munError = document.getElementById('munError');
    var addressPattern = /^[a-zA-Z0-9\s]+$/; // Solo letras, números y espacios

    if (!addressPattern.test(calleInput.value.trim())) {
        calleError.style.display = 'block';
        isValid = false;
    }

    if (!addressPattern.test(colInput.value.trim())) {
        colError.style.display = 'block';
        isValid = false;
    }

    if (!addressPattern.test(munInput.value.trim())) {
        munError.style.display = 'block';
        isValid = false;
    }

 
    // Validación de números internos y externos
    var niInput = document.getElementById('ni');
    var neInput = document.getElementById('ne');
    var niError = document.getElementById('niError');
    var neError = document.getElementById('neError');
    var niValue = niInput.value.trim();
    var neValue = neInput.value.trim();

    if (!/^\d{1,5}$/.test(niValue)) {
        niError.style.display = 'block';
        isValid = false;
    }

    if (!/^\d{1,5}$/.test(neValue)) {
        neError.style.display = 'block';
        isValid = false;
    }

    // Validación de edad mínima
    var fechaNacInput = document.getElementById('fn');
    var fechaNacError = document.getElementById('fnError');
    var fechaNacValue = new Date(fechaNacInput.value);
    var today = new Date();
    var age = today.getFullYear() - fechaNacValue.getFullYear();
    var monthDiff = today.getMonth() - fechaNacValue.getMonth();

    if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < fechaNacValue.getDate())) {
        age--;
    }

    if (age < 17) {
        fechaNacError.style.display = 'block';
        isValid = false;
    }
   

    // Prevenir el envío del formulario si no es válido
    if (!isValid) {
        event.preventDefault();
    }
});