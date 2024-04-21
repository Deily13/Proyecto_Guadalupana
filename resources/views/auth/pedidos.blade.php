<!DOCTYPE html>
<html lang="en">

<link href="{{ asset('asset/lista-pedidos.css') }}" rel="stylesheet">

<body>
    <div class="container">
        <div class="order-section">
            <!-- Aquí se agregarán los pedidos -->
            <div class="order-item">
                <img >
                <div class="info">
                    <h4>Producto 1</h4>
                    <p>Descripcion: helado sabor fssss , leche, kiwi<br>
                    Precio: $100<br>
                    Cantidad: 2</p>
                </div>
            </div>
            <div class="order-item">
                <img >
                <div class="info">
                    <h4>Producto 1</h4>
                    <p>Descripcion: mismosas sin alcohol<br>
                    Precio: $100<br>
                    Cantidad: 2</p>
                </div>
            </div>
            <div class="order-item">
                <img >
                <div class="info">
                    <h4>Producto 1</h4>
                    <p>Descripcion: hamburguesa vegana<br>
                    Precio: $100<br>
                    Cantidad: 2</p>
                </div>
            </div>
            <!-- Repite el bloque .order-item para cada producto -->
        </div>
        <div class="static-section">
            <h2>Información del Cliente</h2>
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
</body>
</html>