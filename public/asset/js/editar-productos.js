// Función para abrir el menú lateral
function openNav() {
    document.getElementById("mySidebar").style.width = "250px";
    document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("main").style.width = "calc(100% - 250px)";
    document.getElementById("main").style.transition = "margin-left 0.5s";
    document.getElementById("closebtn").style.display = "block";
}

// Función para cerrar el menú lateral
function closeNav() {
    document.getElementById("mySidebar").style.width = "0";
    document.getElementById("main").style.marginLeft = "0";
    document.getElementById("main").style.width = "100%";
    document.getElementById("main").style.transition = "margin-left 0.5s";
    document.getElementById("closebtn").style.display = "none";
}

// Añade un detector de eventos de cambio de tamaño de ventana
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

// Función para crear elementos de imagen
function createImageElement(imageFile) {
    var imageElement = document.createElement("img");
    imageElement.src = URL.createObjectURL(imageFile);
    return imageElement;
}

// Función para crear elementos de texto
function createTextElement(tag, text) {
    var textElement = document.createElement(tag);
    textElement.textContent = text;
    return textElement;
}

// Función para crear botones
function createButton(text, className, onClick) {
    var button = document.createElement("button");
    button.textContent = text;
    button.className = className;
    button.onclick = onClick;
    return button;
}

// Función para agregar productos
function addProduct() {
    var productName = document.getElementById("productName").value.trim();
    var productPrice = document.getElementById("productPrice").value.trim();
    var productDisponible = document
        .getElementById("productDisponible")
        .value.trim();
    var productImage = document.getElementById("productImage").files[0];
    var productFeatures = document
        .getElementById("productFeatures")
        .value.trim();

    // Verifica que los campos no estén vacíos antes de crear la tarjeta del producto
    if (
        productName &&
        productPrice &&
        productImage &&
        productDisponible &&
        productFeatures
    ) {
        var productCard = createProductCard(
            productName,
            productPrice,
            productImage,
            productFeatures,
            productDisponible
        );
        document.getElementById("product-list").appendChild(productCard);

        clearFormFields();
        assignButtonEvents(); // Asigna eventos a los nuevos botones
    } else {
        // Puedes mostrar un mensaje de error o hacer que los campos sean obligatorios en tu HTML
        alert(
            "Por favor, completa todos los campos antes de agregar un producto."
        );
    }
}
function createProductCard(name, price, image, disponible, features) {
    var productCard = document.createElement("div");
    productCard.className = "product-card";

    productCard.appendChild(createImageElement(image));
    productCard.appendChild(createTextElement("p", `Nombre: ${name}`));
    productCard.appendChild(createTextElement("p", `Precio: $${price}`));
    productCard.appendChild(
        createTextElement("p", `Disponible: ${disponible}`)
    );
    if (features) {
        productCard.appendChild(
            createTextElement("p", `Características: ${features}`)
        );
    }
    productCard.appendChild(
        createButton("Eliminar", "btn btn-danger delete-btn", function () {
            productCard.remove();
        })
    );
    productCard.appendChild(
        createButton("Editar", "btn btn-info edit-btn", function () {
            transformToEditForm(productCard);
        })
    );

    return productCard;
}

// Función para limpiar los campos del formulario
function clearFormFields() {
    document.getElementById("productName").value = "";
    document.getElementById("productFeatures").value = "";
    document.getElementById("productPrice").value = "";
    document.getElementById("productDisponible").value = "";
    document.getElementById("productImage").value = "";
}

// Función para asignar eventos a los botones de eliminar y editar
function assignButtonEvents() {
    var deleteButtons = document.querySelectorAll(".delete-btn");
    var editButtons = document.querySelectorAll(".edit-btn");

    deleteButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            var productCard = button.closest(".product-card");
            productCard.remove();
        });
    });

    editButtons.forEach(function (button) {
        button.addEventListener("click", function () {
            var productCard = button.closest(".product-card");
            transformToEditForm(productCard);
        });
    });
}

// Función para transformar la tarjeta en un formulario de edición
function transformToEditForm(productCard) {
    var currentImageSrc = productCard.querySelector("img").src;
    var currentName = productCard
        .querySelector("p")
        .textContent.replace("Nombre: ", "");
    var currentPrice = productCard
        .querySelectorAll("p")[1]
        .textContent.replace("Precio: $", "");
    var currentFeatures = productCard
        .querySelectorAll("p")[2]
        ?.textContent.replace("Características: ", "");
    var currentDisponible = productCard
        .querySelectorAll("p")[3]
        ?.textContent.replace("Disponible: ", "");
    var originalContent = productCard.innerHTML;

    var form = document.createElement("form");
    form.innerHTML = `
    <div class="form-group">
    <label>Imagen:</label>
    <input type="file" class="form-control-file" name="productImage">
    </div>
        <div class="form-group">
          <label>Nombre del Producto:</label>
          <input type="text" class="form-control" name="productName" value="${currentName}">
        </div>
        <div class="form-group">
          <label>Precio:</label>
          <input type="number" class="form-control" name="productPrice" value="${currentPrice}">
        </div>
        <div class="form-group">
          <label>Características:</label>
          <textarea class="form-control" name="productFeatures">${currentFeatures}</textarea>
        </div>
        <div class="form-group">
          <label>Disponible:</label>
          <input type="number" class="form-control" name="productDisponible" value="${currentDisponible}">
        </div>
        <div class="button-container">
        <button type="button" class="btn btn-success save-btn">Guardar</button>
        <button type="button" class="btn btn-secondary cancel-btn">Cancelar</button>
        </div>
      `;

    productCard.innerHTML = "";
    productCard.appendChild(form);

    form.querySelector(".save-btn").addEventListener("click", function () {
        saveEditedProduct(productCard, form, currentImageSrc);
    });

    form.querySelector(".cancel-btn").addEventListener("click", function () {
        productCard.innerHTML = originalContent;
        assignButtonEvents();
    });

    assignButtonEvents();
}

// Función para guardar los cambios editados
function saveEditedProduct(productCard, form, currentImageSrc) {
    var newImageFile = form.querySelector('input[name="productImage"]')
        .files[0];
    var newImageSrc = newImageFile
        ? URL.createObjectURL(newImageFile)
        : currentImageSrc;
    var newName = productCard.querySelector('input[name="productName"]').value;
    var newPrice = productCard.querySelector(
        'input[name="productPrice"]'
    ).value;
    var newDiponible = productCard.querySelector(
        'input[name="productDisponible"]'
    ).value;
    var newFeatures = productCard.querySelector(
        'textarea[name="productFeatures"]'
    ).value;

    productCard.innerHTML = `
    <img src="${newImageSrc}" alt="Product Image">
        <p>Nombre: ${newName}</p>
        <p>Precio: $${newPrice}</p>
        <p>Disponible: $${newDiponible}</p>
        ${newFeatures ? `<p>Características: ${newFeatures}</p>` : ""}
        <button class="btn btn-danger delete-btn">Eliminar</button>
        <button class="btn btn-info edit-btn">Editar</button>
      `;

      assignButtonEvents();
}

document.addEventListener("DOMContentLoaded", function () {
    assignButtonEvents();
    // Asigna el evento de clic al botón usando addEventListener
    var addButton = document.getElementById("add-product-button");
    if (addButton) {
        addButton.addEventListener("click", addProduct);
    }
});
