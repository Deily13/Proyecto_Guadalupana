<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('asset/admin.css/css/productos.css') }}">
    <link rel="stylesheet" href="{{ asset('asset/administrador/pedidos.css') }}">
</head>

<body>

    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="{{ url('/admin') }}">Inicio</a>
        <a href="{{ url('/lista-pedidos') }}">Pedidos Pendientes</a>
        <a href="{{ url('/editar-productos') }}">Agregar Productos</a>
        <a href="{{ url('/roles') }}">Roles</a>
    </div>

    <button class="openbtn" onclick="openNav()">☰ Menú</button>

    <div class="container">
        <div class="order-section">
            <!-- Aquí se agregarán los pedidos -->
            <div class="order-item">
                <img>
                <div class="info">
                    <h5>Producto 1</h5>
                    <p>Descripcion: helado sabor fssss , leche, kiwi<br>
                        Precio: $100<br>
                        Cantidad: 2</p>
                </div>
            </div>
        </div>
        <div class="static-section">
            <h3>Información del Cliente</h3>
            <p>Nombre: Morsa de verano con patas<br>
                Dirección: Calle 123, Ciudad, País<br>
                Teléfono: 1234567890<br>
                Correo: juan@gmail.com<br>
                Momento del pedido: 16 de abril de 2024, 21:21:43<br>
                Total: $$$</p>
        </div>
        <div class="button-section">
            <a>Enviar</a>
        </div>
    </div>

    <script src="{{ asset('asset/js/administrador.js') }}"></script>
</body>

</html>