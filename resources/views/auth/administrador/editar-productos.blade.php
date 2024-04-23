<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('asset/admin.css/css/productos.css') }}">
    <link rel="stylesheet" href="{{ asset('css/administrador.css') }}">
</head>

<body>

    <a class="login" href="#login" id="login">Iniciar sesión</a>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="{{ url('/admin') }}">Inicio</a>
        <a href="{{ url('/usuarios') }}">Usuarios</a>
        <a href="{{ url('/roles') }}">Roles</a>
        <a href="{{ url('/nuevos_usuarios') }}">Usuarios registrados</a>
        <a href="{{ url('/productos') }}">Agregar Productos</a>
        <a href="{{ url('/pedidos_pendientes') }}">Pedidos Pendientes</a>
    </div>

    <button class="openbtn" onclick="openNav()">☰ Menú</button>

    <div class="container">
        <form id="product-form">
            <h1 style="text-align: center;">Editar Productos</h1>
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
                    <option value="{{ url('/usuarios') }}">vinos</option>
                    <option value="{{ url('/ofertas') }}">hamburguesas</option>
                    <option value="{{ url('/destacados') }}">heladeria</option>
                    <!-- Agrega más opciones según sea necesario -->
                </select>
            </div>

            <button type="button" class="btn btn-primary" onclick="addProduct()">Agregar Producto</button>
        </form>

        <div id="product-list" class="d-flex justify-content-center"></div>
    </div>

    <div class="modal fade" id="featuresModal" tabindex="-1" role="dialog" aria-labelledby="featuresModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="featuresModalLabel">Añadir Características</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="featureInput">Características:</label>
                        <textarea class="form-control" id="featureInput"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" onclick="addFeatures()">Guardar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="{{ asset('asset/js/administrador.js') }}"></script>
</body>

</html>
