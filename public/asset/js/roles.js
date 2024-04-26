// Función para abrir el menú lateral
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    // Ajusta el margen izquierdo y la anchura del contenido principal para centrarlo
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("main").style.width = "calc(100% - 250px)";
    document.getElementById("main").style.transition = "margin-left 0.5s";
    // Muestra el botón de cierre siempre que el menú esté abierto
    document.getElementById("closebtn").style.display = "block"; // Modificado
}

// Función para cerrar el menú lateral
function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    // Restablece el margen y la anchura del contenido principal
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById("main").style.width = "100%";
    document.getElementById("main").style.transition = "margin-left 0.5s";
    // Oculta el botón de cierre cuando el menú está cerrado
    document.getElementById("closebtn").style.display = "none"; // Modificado
}

// Añade un detector de eventos de cambio de tamaño de ventana
window.addEventListener("resize", function (event) {
    if (window.innerWidth > 1080) {
        // Si la ventana es más ancha que 1080px y el menú está abierto, muestra el botón de cierre
        var sidebarWidth = document.getElementById("mySidebar").style.width;
        if (sidebarWidth === "250px") {
            document.getElementById("closebtn").style.display = "block"; // Modificado
        }
    } else {
        closeNav();
    }
});

document.addEventListener("DOMContentLoaded", function () {
    // Define la función addInfo aquí
    function addInfo() {
        // Obtiene los valores del formulario
        var nombreElement = document.getElementById('nombre');
        var apellidoElement = document.getElementById('apellido');
        var usuarioElement = document.getElementById('user');
        var correoElement = document.getElementById('correo');
        var tipoIdElement = document.getElementById('tipoId');
        var numeroIdElement = document.getElementById('numeroId');
        var movilElement = document.getElementById('movil');
        var direccionElement = document.getElementById('direccion');
        var rolElement = document.getElementById('rol');

        if (
            nombreElement &&
            apellidoElement &&
            usuarioElement &&
            correoElement &&
            tipoIdElement &&
            numeroIdElement &&
            movilElement &&
            direccionElement &&
            rolElement 
        ) {

          var nombre = nombreElement.value;
          var apellido = apellidoElement.value;
          var usuario = usuarioElement.value;
          var correo = correoElement.value;
          var tipoId = tipoIdElement.value;
          var numeroId = numeroIdElement.value;
          var movil = movilElement.value;
          var direccion = direccionElement.value;
          var rol = rolElement.value;
          

            // Crea una nueva fila en la tabla
            var tabla = document.querySelector(".info table");
            var nuevaFila = tabla.insertRow(-1);

            // Inserta celdas en la fila
            nuevaFila.insertCell(0).textContent = nombre;
            nuevaFila.insertCell(1).textContent = apellido;
            nuevaFila.insertCell(2).textContent = usuario;
            nuevaFila.insertCell(3).textContent = rol;
            nuevaFila.insertCell(4).textContent = correo;
            nuevaFila.insertCell(5).textContent = tipoId;
            nuevaFila.insertCell(6).textContent = numeroId;
            nuevaFila.insertCell(7).textContent = movil;
            nuevaFila.insertCell(8).textContent = direccion;
    
            if (rol === 'admin') {
                var quitarButton = document.createElement('button');
                quitarButton.textContent = 'Quitar Permisos';
                // Define la función que se ejecutará cuando se haga clic en el botón
                quitarButton.onclick = function() {
                    // Cambia el rol del usuario a 'invitado'
                    rolElement.value = 'invitado';
                    // Actualiza el texto de la celda del rol en la tabla
                    nuevaFila.cells[3].textContent = 'invitado';
                    // Elimina el botón de la fila
                    this.parentElement.removeChild(this);
                };
                nuevaFila.insertCell(9).appendChild(quitarButton);
            }
        } else {
            console.error("Uno o más elementos del formulario no se encontraron en el DOM.");
        }
    }

    // Agrega el evento 'click' al botón "Agregar" y vincula la función addInfo
    var addButton = document.getElementById("addButton");
    if (addButton) {
        addButton.addEventListener("click", addInfo);
    } else {
        console.error('El botón con ID "addButton" no se encontró en el DOM.');
    }
});
