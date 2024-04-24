window.onload = function() {
  var adminName = "Nombre del Admin";
  document.getElementById("welcome").innerHTML = "Bienvenido " + adminName;
}

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
  document.getElementById("main").style.marginLeft= "0";
  document.getElementById("main").style.width = "100%";
  document.getElementById("main").style.transition = "margin-left 0.5s";
  // Oculta el botón de cierre cuando el menú está cerrado
  document.getElementById("closebtn").style.display = "none"; // Modificado
}

// Añade un detector de eventos de cambio de tamaño de ventana
window.addEventListener('resize', function(event){
  if(window.innerWidth > 1080){
    // Si la ventana es más ancha que 1080px y el menú está abierto, muestra el botón de cierre
    var sidebarWidth = document.getElementById("mySidebar").style.width;
    if (sidebarWidth === "250px") {
      document.getElementById("closebtn").style.display = "block"; // Modificado
    }
  } else {
    closeNav();
  }
});

function addInfo() {
  var name = document.getElementById('name').value;
  var email = document.getElementById('email').value;
  var operator = document.getElementById('operator').value;
  var role = document.getElementById('role').value;
  var infoDiv = document.getElementById('info');
  infoDiv.innerHTML += 'Nombre: ' + name + ', Correo: ' + email + ', Operador: ' + operator + ', Rol: ' + role + '<br>';
}