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


    <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="{{ url('/admin') }}">Inicio</a>
        <a href="{{ url('/lista-pedidos') }}">Pedidos Pendientes</a>
        <a href="{{ url('/editar-productos') }}">Agregar Productos</a>
        <a href="{{ url('/roles') }}">Roles</a>
    </div>

    <button class="openbtn" onclick="openNav()">☰ Menú</button>

    <div class="ContenedorPedidos">
        @foreach ($pedidos as $key => $pedido)
            <div class="DescripcionBreve">
                <div class="Numerador">{{ $key+1 }}</div>
                <div class="Datos">
                    <h4><b>Momento:</b> {{ $pedido->bolsa[0]->created_at->diffForHumans()  }}</h4>
                    <a><b>Cliente:</b> {{ $pedido->first_name.' '.$pedido->last_name }}</a><br>
                    <a><b>Productos:</b>  @php
                        $total = 0;
                    @endphp
                    @foreach ($pedido->bolsa as $bolsa)
                        {{ $bolsa->product->nombre }},
                        @php
                            $total += $bolsa->cantidad * $bolsa->product->precio;
                        @endphp
                    @endforeach</a><br>
                    <a><b>Total:</b> ${{ number_format($total, 2) }}</a>
                </div>
                <div class="BotonRevisar" onclick="window.location.href='/pedidos'">Revisar</div>
            </div>
        @endforeach
    </div>

    <script src="{{ asset('asset/js/lista-pedidos.js') }}"></script>
</body>

</html>