<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador de Productos</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('asset/administrador/lista-pedidos.css') }}">
</head>

<body>

<a class="login" href="#login" id="login">Iniciar sesión</a>

<div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="{{ url('/admin') }}">Inicio</a>
    <a href="{{ url('/lista-pedidos') }}">Pedidos Pendientes</a>
    <a href="{{ url('/editar-productos') }}">Agregar Productos</a>
    <a href="{{ url('/roles') }}">Roles</a>
</div>

<button class="openbtn" onclick="openNav()">☰ Menú</button>


    <div class="ContenedorPedidos">
        <div class="DescripcionBreve">
            <div class="Numerador">1</div>
            <div class="Datos">
                <h4>Momento:</h4>
                <a>Productos:.......................................</a><br>
                <a>Cliente:.......................................</a>
            </div>
            <div class="BotonRevisar" onclick="window.location.href='/pedidos'">Revisar</div>
        </div>

        <div class="DescripcionBreve">
            <div class="Numerador">1</div>
            <div class="Datos">
                <h4>Momento:</h4>
                <a>Productos:.......................................</a><br>
                <a>Cliente:.......................................</a>
            </div>
            <div class="BotonRevisar" onclick="window.location.href='/pedidos'">Revisar</div>
        </div>

    </div>

 <script src="{{ asset('asset/js/lista-pedidos.js') }}"></script>
</body>
</html>