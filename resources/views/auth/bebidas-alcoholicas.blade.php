<!DOCTYPE html>
<html lang="en">
<<<<<<< HEAD
=======

>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
<<<<<<< HEAD
    <link href="{{ asset('asset/bebidas_alcoholicas.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<div class="ContainerBebidasAlcoholicas">
=======
    <link href="{{ asset('asset/Productos.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<div class="ContainerProductos">
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026

    @foreach ($bebidas as $bebida)
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
            <h1>{{ $bebida->nombre }}</h1>
            <p>{{ $bebida->Descripción }}</p>
            <div class="botones">
<<<<<<< HEAD
                <h5>{{ $bebida->Stock }}</</h5>
                <div class="BotonPedir">Pedir</div>
=======
                <h5>{{ $bebida->Stock }}</< /h5>
                    <div class="BotonPedir">Pedir</div>
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
            </div>
        </div>
    </div>
    @endforeach

</div>

<script src="{{ asset('asset/js/bebidas-alcoholicas.js') }}"></script>
</body>
<<<<<<< HEAD
</html>
=======

</html>
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
