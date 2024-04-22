function toggleDropdown() {
    var dropdown = document.getElementById("dropdownMenu");
    if (dropdown.style.display === "none") {
        dropdown.style.display = "block";
    } else {
        dropdown.style.display = "none";
    }
}

function calificar(seccion, calificacion) {
    var calificacionDiv = document.getElementById("calificacion".concat(seccion));
    var estrellas = calificacionDiv === null || calificacionDiv === void 0 ? void 0 : calificacionDiv.querySelectorAll('.estrella');
    estrellas === null || estrellas === void 0 ? void 0 : estrellas.forEach(function (estrella, index) {
        if (index < calificacion) {
            estrella.style.color = 'gold'; // Cambiar el color de la estrella seleccionada
        }
        else {
            estrella.style.color = 'black'; // Restaurar el color de las estrellas no seleccionadas
        }
    });
    // Aquí puedes enviar la calificación al servidor o realizar otras acciones necesarias
}

document.addEventListener('DOMContentLoaded', function() {
    var botonesPedir = document.querySelectorAll('button[id^="botonPedir"]');

    botonesPedir.forEach(function(boton) {
        boton.addEventListener('click', function(event) {
        
            event.preventDefault();
            boton.textContent = 'Seleccionado';
            boton.disabled = true;
        });
    });
});

var limite = 2;
var checkboxes = document.querySelectorAll('.SaborCheckbox-button');

checkboxes.forEach(function(checkbox) {
    checkbox.addEventListener('change', function() {
        var checkedCount = document.querySelectorAll('.SaborCheckbox-button:checked').length;
        if (checkedCount > limite) {
            this.checked = false;
            alert('Solo puedes seleccionar hasta ' + limite + ' opciones.');
        }
    });
});