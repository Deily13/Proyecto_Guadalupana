function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }
  
  function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft= "0";
  }

  function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("closebtn").style.display = "block"; /* Muestra el botón de cierre cuando se abre el menú */
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("closebtn").style.display = "none"; /* Oculta el botón de cierre cuando se cierra el menú */
}

// Añade un detector de eventos de cambio de tamaño de ventana
window.addEventListener('resize', function(event){
    // Comprueba el ancho de la ventana
    if(window.innerWidth > 1080){
        // Si es mayor que 1080px, establece el ancho del menú en 250px
        document.getElementById("mySidebar").style.width = "250px";
        document.getElementById("closebtn").style.display = "none"; /* Oculta el botón de cierre en pantallas grandes */
    } else {
        // Si es menor o igual que 1080px, cierra el menú
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