document.addEventListener('DOMContentLoaded', function() {
    var form = document.getElementById('form3');

    form.addEventListener('submit', function(event) {
        // Validaciones de longitud
        var isValid = true;

        function checkLength(input, minLength, maxLength, errorElementId) {
            var value = input.value.trim();
            if (value.length < minLength || value.length > maxLength) {
                document.getElementById(errorElementId).style.display = 'block';
                isValid = false;
            } else {
                document.getElementById(errorElementId).style.display = 'none';
            }
        }

        checkLength(document.getElementById('nombre'), 2, 50, 'nombreError');
        checkLength(document.getElementById('ap'), 2, 50, 'apError');
        checkLength(document.getElementById('am'), 2, 50, 'amError');
        checkLength(document.getElementById('curp'), 18, 18, 'curpError');
        checkLength(document.getElementById('telefono'), 10, 10, 'telefonoError');
        checkLength(document.getElementById('correo'), 5, 100, 'correoError');
        checkLength(document.getElementById('calle'), 3, 100, 'calleError');
        checkLength(document.getElementById('col'), 3, 100, 'colError');
        checkLength(document.getElementById('mun'), 3, 100, 'munError');
        checkLength(document.getElementById('ni'), 1, 10, 'niError');
        checkLength(document.getElementById('ne'), 1, 10, 'neError');

        // Prevenir el envío del formulario si no es válido
        if (!isValid) {
            event.preventDefault();
        }
    });
});