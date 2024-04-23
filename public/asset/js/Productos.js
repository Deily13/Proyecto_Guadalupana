function toggleDropdown() {
    var dropdown = document.getElementById("dropdownMenu");
    if (dropdown.style.display === "none") {
        dropdown.style.display = "block";
        // Agrega un controlador de eventos al documento para escuchar clics fuera del menú
        document.addEventListener('click', closeDropdownOnClickOutside);
    } else {
        dropdown.style.display = "none";
        // Elimina el controlador de eventos del documento cuando el menú se oculta
        document.removeEventListener('click', closeDropdownOnClickOutside);
    }
}

// Esta función oculta el menú desplegable si se hace clic fuera de él
function closeDropdownOnClickOutside(event) {
    var dropdown = document.getElementById("dropdownMenu");
    if (!dropdown.contains(event.target)) {
        dropdown.style.display = "none";
        document.removeEventListener('click', closeDropdownOnClickOutside);
    }
}

document.querySelector('.menu').addEventListener('click', function(event) {
    event.stopPropagation();
});


function calificar(seccion, calificacion) {
    var calificacionDiv = document.getElementById("calificacion".concat(seccion));
    var estrellas = calificacionDiv === null || calificacionDiv === void 0 ? void 0 : calificacionDiv.querySelectorAll('.estrella');
    estrellas === null || estrellas === void 0 ? void 0 : estrellas.forEach(function (estrella, index) {
        if (index < calificacion) {
            estrella.style.color = 'gold'; 
        }
        else {
            estrella.style.color = 'black'; 
        }
    });
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

function makeResponsive() {
    var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    if (width <= 768) {
        // Apply mobile styles
        document.querySelector('.toolbar').style.width = '100%';
        document.querySelector('.toolbar').style.margin = '0';
        document.querySelector('.botonera').style.width = '100%';
        document.querySelector('.ContainerProductos').style.flexDirection = 'column';
        document.querySelectorAll('.Cuadro').forEach(function(cuadro) {
            cuadro.style.width = '100%';
        });
    } else {
        // Apply desktop styles
        document.querySelector('.toolbar').style.width = '96%';
        document.querySelector('.toolbar').style.margin = '2%';
        document.querySelector('.botonera').style.width = '30%';
        document.querySelector('.ContainerProductos').style.flexDirection = 'row';
        document.querySelectorAll('.Cuadro').forEach(function(cuadro) {
            cuadro.style.width = 'calc(45% - 2px)';
        });
    }
}

// Add event listener for window resize
window.addEventListener('resize', makeResponsive);

// Call the function on initial load
makeResponsive();