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


// Función para transformar la tarjeta en un formulario de edición

document.addEventListener('DOMContentLoaded', function() {
    document.querySelectorAll('.edit-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            transformToEditForm(this);
        });
    });

    document.querySelectorAll('.delete-btn').forEach(function(button) {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            deleteProduct(this);
        });
    });
});

function transformToEditForm(button) {
    var productCard = button.closest('.cuadro');
    var productNameElement = productCard.querySelector('.product-name');
    var productPriceElement = productCard.querySelector('.product-price');
    var productFeaturesElement = productCard.querySelector('.product-features');

    if (!productNameElement || !productPriceElement || !productFeaturesElement) {
        console.error('No se pudo encontrar uno o más elementos necesarios para la edición.');
        return; // Salir de la función si no se encuentran los elementos
    }

    var productName = productNameElement.textContent;
    var productPrice = productPriceElement.textContent;
    var productFeatures = productFeaturesElement.textContent;

    var editForm = productCard.nextElementSibling;
    var productImageInput = editForm.querySelector('input[name="productImage"]');
    var productNameInput = editForm.querySelector('input[name="productName"]');
    var productPriceInput = editForm.querySelector('input[name="productPrice"]');
    var productFeaturesTextarea = editForm.querySelector('textarea[name="productFeatures"]');
    var productDisponibleInput = editForm.querySelector('input[name="productDisponible"]');

    // Llena los campos del formulario de edición con los datos obtenidos
    productImageInput.value = productCard.querySelector('img').src;
    productNameInput.value = productName;
    productPriceInput.value = productPrice;
    productFeaturesTextarea.value = productFeatures;
    productDisponibleInput.value = productCard.dataset.id; // Asumiendo que quieres usar el data-id como valor disponible

    // Muestra el formulario de edición
    editForm.style.display = 'block';
}