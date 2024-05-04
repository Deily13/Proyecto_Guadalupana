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


function desplegable() {
    var desplegable = document.getElementById('desplegableoption');
    if (desplegable.style.display === 'none') {
        desplegable.style.display = 'block';
    } else {
        desplegable.style.display = 'none';
    }
}
