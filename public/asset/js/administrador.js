function addProduct() {
    // Obtener los valores de los campos del formulario
    var productName = document.getElementById('productName').value.trim();
    var productPrice = document.getElementById('productPrice').value.trim();
    var productImage = document.getElementById('productImage').files[0];
    var productFeatures = document.getElementById('productFeatures').value.trim();

    // Crear el elemento de la tarjeta del producto
    var productCard = document.createElement('div');
    productCard.className = 'product-card';

    // Crear elemento de imagen y configurar la fuente
    var imageElement = document.createElement('img');
    imageElement.src = URL.createObjectURL(productImage);
    productCard.appendChild(imageElement);

    // Crear elemento de nombre y agregar texto
    var nameElement = document.createElement('p');
    nameElement.textContent = 'Nombre: ' + productName;
    productCard.appendChild(nameElement);

    // Agregar características si están disponibles
    if (productFeatures !== '') {
        var featuresElement = document.createElement('p');
        featuresElement.textContent = 'Características: ' + productFeatures;
        productCard.appendChild(featuresElement);
    }

    // Crear elemento de precio y agregar texto
    var priceElement = document.createElement('p');
    priceElement.textContent = 'Precio: $' + productPrice;
    productCard.appendChild(priceElement);

    // Crear botón de eliminación
    var deleteButton = document.createElement('button');
    deleteButton.textContent = 'Eliminar';
    deleteButton.className = 'btn btn-danger delete-btn';
    // Agregar evento de clic para eliminar la tarjeta del producto
    deleteButton.addEventListener('click', function () {
        productCard.remove();
    });
    productCard.appendChild(deleteButton);

    // Agregar la tarjeta del producto al contenedor de la lista de productos
    document.getElementById('product-list').appendChild(productCard);

    // Limpiar los campos del formulario después de agregar el producto
    document.getElementById('productName').value = '';
    document.getElementById('productFeatures').value = '';
    document.getElementById('productPrice').value = '';
    document.getElementById('productImage').value = '';
}

function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("closebtn").style.display = "block"; /* Muestra el botón de cierre cuando se abre el menú */
}

function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById("closebtn").style.display = "none"; /* Oculta el botón de cierre cuando se cierra el menú */
}

// Añade un detector de eventos de cambio de tamaño de ventana
window.addEventListener('resize', function (event) {
    // Comprueba el ancho de la ventana
    if (window.innerWidth > 1080) {
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
