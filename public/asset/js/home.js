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