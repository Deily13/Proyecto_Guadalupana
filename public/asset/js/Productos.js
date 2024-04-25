function toggleDropdown() {
    var dropdown = document.getElementById("dropdownMenu");
    if (dropdown.style.display === "none") {
        dropdown.style.display = "block";
        document.addEventListener('click', closeDropdownOnClickOutside);
    } else {
        dropdown.style.display = "none";
        document.removeEventListener('click', closeDropdownOnClickOutside);
    }
}

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
            new Noty({
                type: 'error',
                layout: 'topRight',
                text: 'Solo puedes seleccionar hasta ' + limite + ' opciones.'
            }).show();
        }
    });
});

function makeResponsive() {
    var width = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    var toolbar = document.querySelector('.toolbar');
    var botonera = document.querySelector('.botonera');
    var containerProductos = document.querySelector('.ContainerProductos');
    var cuadros = document.querySelectorAll('.Cuadro');

    if (width <= 768) {
        toolbar.style.width = '100%';
        toolbar.style.margin = '0';
        botonera.style.width = '100%';
        containerProductos.style.flexDirection = 'column';
        cuadros.forEach(function(cuadro) {
            cuadro.style.width = '100%';
        });
    } else {
        toolbar.style.width = '96%';
        toolbar.style.margin = '2%';
        botonera.style.width = '30%';
        containerProductos.style.flexDirection = 'row';
        cuadros.forEach(function(cuadro) {
            cuadro.style.width = 'calc(45% - 2px)';
        });
    }
}

window.addEventListener('resize', makeResponsive);
makeResponsive();

function toggleSearchBar() {
    var searchBar = document.getElementById("searchBar");
    if (searchBar.style.display === "none") {
      searchBar.style.display = "block"; // Muestra la barra de búsqueda
      searchBar.style.animation = "1s ease-out 0s 1 slideInFromLeft"; // Aplica la animación
      searchBar.addEventListener("animationend", function() {
        this.style.animation = "none"; // Elimina la animación una vez que se haya completado
      });
    } else {
      searchBar.style.display = "none"; // Oculta la barra de búsqueda
    }
  }
