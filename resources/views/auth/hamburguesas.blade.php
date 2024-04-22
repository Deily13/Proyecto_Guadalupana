<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link href="{{ asset('asset/hamburguesas.css') }}" rel="stylesheet">
</head>

<body>
    <div class="ContainerHamburguesas">
        <div class="Cuadro">
            <div class="img">
                <div class="Calificador" id="calificacion1">
                    <span class="estrella" onclick="calificar(1, 1)">&#9734;</span>
                    <span class="estrella" onclick="calificar(1, 2)">&#9734;</span>
                    <span class="estrella" onclick="calificar(1, 3)">&#9734;</span>
                    <span class="estrella" onclick="calificar(1, 4)">&#9734;</span>
                    <span class="estrella" onclick="calificar(1, 5)">&#9734;</span>
                </div>
            </div>
            <div class="Detalle">
                <h1>Hamburguesa Doble</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor turpis nec velit pretium, nec
                    molestie mi
                    sodales. Integer et magna quis arcu interdum malesuada.</p>

                <form action="/procesar_pedido" method="POST">
                    @csrf <!-- Agrega esto si estás utilizando Blade para evitar el error CSRF -->
                    <div class="botones">
                        <label for="cantidad">
                            <h5>Cantidad</h5>
                        </label>
                        <input type="number" id="cantidad" name="cantidad" min="1" value="1">
                    </div>
                    <button type="submit" id="botonPedir">Pedir</button>
                </form>
            </div>
        </div>




        <div class="Cuadro">
            <div class="img">
                <div class="Calificador" id="calificacion2">
                    <span class="estrella" onclick="calificar(2, 1)">&#9734</span>
                    <span class="estrella" onclick="calificar(2, 2)">&#9734</span>
                    <span class="estrella" onclick="calificar(2, 3)">&#9734</span>
                    <span class="estrella" onclick="calificar(2, 4)">&#9734</span>
                    <span class="estrella" onclick="calificar(2, 5)">&#9734</span>
                </div>
            </div>
            <div class="Detalle">
            <form action="/procesar_pedido" method="POST">
                    @csrf <!-- Agrega esto si estás utilizando Blade para evitar el error CSRF -->
                    <div class="botones">
                        <label for="cantidad">
                            <h5>Cantidad</h5>
                        </label>
                        <input type="number" id="cantidad" name="cantidad" min="1" value="1">
                    </div>
                    <button type="submit" id="botonPedir">Pedir</button>
                </form>
            </div>
        </div>



        <div class="Cuadro">
            <div class="img">

                <div class="Calificador" id="calificacion3">
                    <span class="estrella" onclick="calificar(3, 1)">&#9734;</span>
                    <span class="estrella" onclick="calificar(3, 2)">&#9734;</span>
                    <span class="estrella" onclick="calificar(3, 3)">&#9734;</span>
                    <span class="estrella" onclick="calificar(3, 4)">&#9734;</span>
                    <span class="estrella" onclick="calificar(3, 5)">&#9734;</span>
                </div>
            </div>
            <div class="Detalle">
            <form action="/procesar_pedido" method="POST">
                    @csrf <!-- Agrega esto si estás utilizando Blade para evitar el error CSRF -->
                    <div class="botones">
                        <label for="cantidad">
                            <h5>Cantidad</h5>
                        </label>
                        <input type="number" id="cantidad" name="cantidad" min="1" value="1">
                    </div>
                    <button type="submit" id="botonPedir">Pedir</button>
                </form>
            </div>
        </div>
    </div>

    <script src="{{ asset('asset/js/hamburguesas.js') }}"></script>
</body>