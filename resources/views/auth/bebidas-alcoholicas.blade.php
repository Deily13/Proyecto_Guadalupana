<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('asset/bebidas_alcoholicas.css') }}" rel="stylesheet">
    <title>Document</title>
</head>

<div class="ContainerBebidasAlcoholicas">

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
                <h5>{{ $bebida->Stock }}</</h5>
                <div class="BotonPedir">Pedir</div>
            </div>
        </div>
    </div>
    @endforeach

</div>

<script src="{{ asset('asset/js/bebidas-alcoholicas.js') }}"></script>
</body>
</html>
