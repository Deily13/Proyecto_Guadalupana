//Función para abrir el menú lateral
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("main").style.width = "calc(100% - 250px)";
    document.getElementById("main").style.transition = "margin-left 0.5s";
    document.getElementById("closebtn").style.display = "block";
}

// // Función para cerrar el menú lateral
function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById("main").style.width = "100%";
    document.getElementById("main").style.transition = "margin-left 0.5s";
    document.getElementById("closebtn").style.display = "none";
}

// // Añade un detector de eventos de cambio de tamaño de ventana
window.addEventListener("resize", function (event) {
    if (window.innerWidth > 1080) {
        var sidebarWidth = document.getElementById("mySidebar").style.width;
        if (sidebarWidth === "250px") {
            document.getElementById("closebtn").style.display = "block";
        }
    } else {
        closeNav();
    }
});

document.addEventListener("DOMContentLoaded", function () {
    var editButtons = document.querySelectorAll(".edit-btn");

    editButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            var productId = button.id.replace("editBtn", "");
            var editFormContainer = document.querySelector(
                ".edit-form-container#editFormContainer" + productId
            );
            editFormContainer.style.display = "block";
            // Aquí podrías ocultar otros formularios de edición si es necesario
        });
    });
});