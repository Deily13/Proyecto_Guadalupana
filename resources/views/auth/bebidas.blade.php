<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <link href="{{ asset('asset/bebidas.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<div class="ContainerBebidas">

    @foreach ($bebidas as $bebida)
=======
    <link href="{{ asset('asset/Productos.css') }}" rel="stylesheet">
    <title>Document</title>
</head>


<body>

<div class="toolbar">
        <div class="menu" onclick="toggleDropdown()">
            <div class="dropdown" id="dropdownMenu" style="display: none;">
                <!-- Elementos del menú -->
                <a href="/bebidas-alcoholicas">Bebidas Alcoholicas</a>
                <a href="/hamburguesas">Hamburguesas</a>
                <a href="/heladeria">Heladeria</a>
                <a href="/comidas-rapidas">Comidas Rapidas</a>
                <a href="/bebidas">Bebidas</a>
                <a href="/combos">Combos</a>
            </div>
        </div>

        <div class="botonera">
            <a>
                <div class="boton_toolbar1"></div>
            </a>
            <a href="/dashboard">
                <div class="boton_toolbar2"></div>
            </a>
            <a href="/bolsa">
                <div class="boton_toolbar3"></div>
            </a>
            <a href="/lista-pedidos">
                <div class="boton_toolbar4"></div>
            </a>

            <!--nombre de usuario registrado (perfil)  -->
            <a>
                <div class="usuario">usuario</div>
            </a>

        </div>
    </div>

<div class="ContainerProductos">

    @foreach ($refrescos as $refresco)
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
    <div class="Cuadro">
        <div class="img">
            <img src="{{ $bebida->image}}" alt="Descripción de la imagen">
            <div class="Calificador" id="calificacion1">
                <span class="estrella" onclick="calificar(1, 1)">&#9734;</span>
                <span class="estrella" onclick="calificar(1, 2)">&#9734;</span>
                <span class="estrella" onclick="calificar(1, 3)">&#9734;</span>
                <span class="estrella" onclick="calificar(1, 4)">&#9734;</span>
                <span class="estrella" onclick="calificar(1, 5)">&#9734;</span>
            </div>
        </div>
        <div class="Detalle">
<<<<<<< HEAD
            <h1>{{ $bebida->nombre }}</h1>
            <p>{{ $bebida->Descripción }}</p>
            <div class="botones">
                <h5>{{ $bebida->Stock }}</</h5>
                <div class="BotonPedir">Pedir</div>
            </div>
=======
        <h1>{{ $refresco->nombre }}</h1>
                <p>{{ $refresco->Descripción }}</p>
                <div class="botones">
                        <div class="BotonPedir1">Pedir</div>
                </div>
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
        </div>
    </div>
    @endforeach

</div>

<<<<<<< HEAD
<script src="{{ asset('asset/js/bebidas.js') }}"></script>
=======
<script src="{{ asset('asset/js/Productos.js') }}"></script>
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
</body>
</html>
