<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('asset/administrador/editar-producto.css') }}">
</head>

<body>

    <a class="login" href="#login" id="login">Iniciar sesión</a>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="{{ url('/admin') }}">Inicio</a>
        <a href="{{ url('/lista-pedidos') }}">Pedidos Pendientes</a>
        <a href="{{ url('/editar-productos') }}">Agregar Productos</a>
        <a href="{{ url('/roles') }}">Roles</a>
        <a href="{{ url('/nuevos-usuarios') }}">Usuarios registrados</a>
    </div>

    <button class="openbtn" onclick="openNav()">☰ Menú</button>

    <div class="container">
        <form id="product-form">
            <h1 style="text-align: center;">Craer Producto</h1>
            <div class="form-group">
                <label for="productImage">Seleccionar Imagen:</label>
                <input type="file" class="form-control-file" id="productImage" accept="image/*" required>
            </div>

            <div class="form-group">
                <label for="productName">Nombre del Producto:</label>
                <input type="text" class="form-control" id="productName" required>
            </div>

            <div class="form-group">
                <label for="productFeatures">Características:</label>
                <textarea class="form-control" id="productFeatures"></textarea>
            </div>

            <div class="form-group">
                <label for="productPrice">Precio:</label>
                <input type="number" class="form-control" id="productPrice" required>
            </div>

            <div class="form-group">
                <label for="productView">Vista de Destino:</label>
                <select class="form-control" id="productView" required>
                    <option value="" disabled selected>Selecciona una vista</option>
                    <option value="{{ url('/bebidas') }}">Bebidas Alcoholicas</option>
                    <option value="{{ url('/hamburguesas') }}">Hamburguesas</option>
                    <option value="{{ url('/helados') }}">Heladeria</option>
                    <option value="{{ url('/comidas') }}">Comidas Rapidas</option>
                    <option value="{{ url('/refrescos') }}">Refrescos</option>
                    <option value="{{ url('/combos') }}">Combos</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>
            </div>

            <button type="button" class="btn btn-primary" id="add-product-button">Agregar Producto</button>
        </form>

        <div id="product-list" class="d-flex justify-content-center"></div>
    </div>

    <div class="modal fade" id="featuresModal" tabindex="-1" role="dialog" aria-labelledby="featuresModalLabel" aria-hidden="true">
        <!-- Tarjeta de producto -->
    </div>


    <div class="ProductosBD">
        <div class="container-product">
            <h3>Bebidas Alcoholicas</h3>
            <div class="cuadro">
                <img src="" alt="Producto">
                <p>Nombre: <span id="productName">Nombre del Producto</span></p>
                <p>Precio: <span id="productPrice">$0.00</span></p>
                <p>Características: <span id="productFeatures">Descripción del producto</span></p>
                <button class="btn btn-danger delete-btn">Eliminar</button>
                <button class="btn btn-info edit-btn">Editar</button>
            </div>
        </div>
        <div class="container-product">
            <h3>Hamburguesas</h3>
            <div class="cuadro">
                <img src="" alt="Producto">
                <p>Nombre: <span id="productName">Nombre del Producto</span></p>
                <p>Precio: <span id="productPrice">$0.00</span></p>
                <p>Características: <span id="productFeatures">Descripción del producto</span></p>
                <button class="btn btn-danger delete-btn">Eliminar</button>
                <button class="btn btn-info edit-btn">Editar</button>
            </div>
        </div>
        <div class="container-product">
            <h3>Helados</h3>
            <div class="cuadro">
                <img src="" alt="Producto">
                <p>Nombre: <span id="productName">Nombre del Producto</span></p>
                <p>Precio: <span id="productPrice">$0.00</span></p>
                <p>Características: <span id="productFeatures">Descripción del producto</span></p>
                <button class="btn btn-danger delete-btn">Eliminar</button>
                <button class="btn btn-info edit-btn">Editar</button>
            </div>
        </div>
        <div class="container-product">
            <h3>Comidas Rapidas</h3>
            <div class="cuadro">
                <img src="" alt="Producto">
                <p>Nombre: <span id="productName">Nombre del Producto</span></p>
                <p>Precio: <span id="productPrice">$0.00</span></p>
                <p>Características: <span id="productFeatures">Descripción del producto</span></p>
                <button class="btn btn-danger delete-btn">Eliminar</button>
                <button class="btn btn-info edit-btn">Editar</button>
            </div>
        </div>
        <div class="container-product">
            <h3>Refrescos</h3>
            <div class="cuadro">
                <img src="" alt="Producto">
                <p>Nombre: <span id="productName">Nombre del Producto</span></p>
                <p>Precio: <span id="productPrice">$0.00</span></p>
                <p>Características: <span id="productFeatures">Descripción del producto</span></p>
                <button class="btn btn-danger delete-btn">Eliminar</button>
                <button class="btn btn-info edit-btn">Editar</button>
            </div>
        </div>
        <div class="container-product">
            <h3>Combos</h3>
            <div class="cuadro">
                <img src="" alt="Producto">
                <p>Nombre: <span id="productName">Nombre del Producto</span></p>
                <p>Precio: <span id="productPrice">$0.00</span></p>
                <p>Características: <span id="productFeatures">Descripción del producto</span></p>
                <button class="btn btn-danger delete-btn">Eliminar</button>
                <button class="btn btn-info edit-btn">Editar</button>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="{{ asset('asset/js/editar-productos.js') }}"></script>
</body>

</html>