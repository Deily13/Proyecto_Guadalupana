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
    function addInfo(event) {
        event.preventDefault(); // Evita que el formulario se envíe y la página se recargue

        // Obtiene los valores del formulario
        var nombre = document.getElementById('nombre').value.trim();
        var apellido = document.getElementById('apellido').value.trim();
        var usuario = document.getElementById('user').value.trim();
        var correo = document.getElementById('correo').value.trim();
        var tipoId = document.getElementById('tipoId').value;
        var numeroId = document.getElementById('numeroId').value.trim();
        var movil = document.getElementById('movil').value.trim();
        var direccion = document.getElementById('direccion').value.trim();
        var rol = document.getElementById('rol').value;

        // Verifica si todos los campos del formulario están completos
        if (nombre !== '' && apellido !== '' && usuario !== '' && correo !== '' && tipoId !== '' && numeroId !== '' && movil !== '' && direccion !== '' && rol !== '') {
            // Crea una nueva fila en la tabla
            var tabla = document.querySelector(".info table tbody");
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
                    document.getElementById('rol').value = 'invitado';
                    // Actualiza el texto de la celda del rol en la tabla
                    nuevaFila.cells[3].textContent = 'invitado';
                    // Oculta el botón en lugar de eliminarlo
                    this.style.display = 'none';
                };
                nuevaFila.insertCell(9).appendChild(quitarButton);
            }
        } else {
            console.error("Por favor, complete todos los campos del formulario.");
        }

        // Restablece el formulario después de agregar la fila
        document.getElementById("Form-user-dat").reset();
    }

    // Agrega el evento 'submit' al formulario y vincula la función addInfo
    var form = document.getElementById("Form-user-dat");
    if (form) {
        form.addEventListener("submit", addInfo);
    } else {
        console.error('El formulario con ID "Form-user-dat" no se encontró en el DOM.');
    }



    // Agrega el evento 'submit' al formulario y vincula la función addInfo
    var form = document.getElementById("Form-user-dat");
    if (form) {
        form.addEventListener("submit", addInfo);
    } else {
        console.error('El formulario con ID "Form-user-dat" no se encontró en el DOM.');
    }
});
