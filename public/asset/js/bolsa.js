// Función para alternar la visibilidad del menú desplegable
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

// Evita que el clic en el menú desplegable cierre el menú
document.querySelector('.menu').addEventListener('click', function(event) {
    event.stopPropagation();
});

// Función para alternar la visibilidad de la barra de búsqueda
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

// Función para eliminar un producto del DOM
function eliminarProductoDOM(elemento) {
    var producto = elemento.closest('.Producto');
    producto.remove();
}

function eliminarProducto(productoId) {
    // Realiza una solicitud AJAX para eliminar el producto de la bolsa
    $.ajax({
        type: "POST",
        url: "/eliminar_producto",
        data: {
            _token: "{{ csrf_token() }}", // Agrega el token CSRF para protección
            id: productoId
        },
        success: function(response) {
            // Verifica si la eliminación fue exitosa
            if (response.success) {
                // Elimina el producto del DOM
                eliminarProductoDOM(productoId);
                // Muestra un mensaje de éxito o realiza cualquier otra acción necesaria
                alert(response.message);
            } else {
                // Muestra un mensaje de error si la eliminación falló
                alert("Error al eliminar el producto: " + response.message);
            }
        },
        error: function(xhr, textStatus, errorThrown) {
            // Maneja los errores de la solicitud AJAX si es necesario
            console.error("Error al eliminar el producto:", errorThrown);
        }
    });
}
