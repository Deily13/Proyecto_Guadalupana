<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
<<<<<<< HEAD
    <link href="{{ asset('asset/hamburguesas.css') }}" rel="stylesheet">
</head>

<body>
    <div class="ContainerHamburguesas">
=======
    <link href="{{ asset('asset/Productos.css') }}" rel="stylesheet">
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
    @foreach ($hamburguesas as $hamburguesa)
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
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
<<<<<<< HEAD
                <h1>Hamburguesa Doble</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor turpis nec velit pretium, nec
                    molestie mi
                    sodales. Integer et magna quis arcu interdum malesuada.</p>

                <form action="/procesar_pedido" method="POST">
            
                    <label class="Sabor" id="sabor1">
                        <input type="checkbox" name="sabor" value="Chocolate" class="SaborCheckbox-button">
                        <div class="SaborImagen"></div>
                        <span class="texto-descriptivo">Chocolate</span>
                    </label>
                    <label class="Sabor" id="sabor2">
                        <input type="checkbox" name="sabor" value="Vainilla" class="SaborCheckbox-button">
                        <div class="SaborImagen"></div>
                        <span class="texto-descriptivo">Vainilla</span>
                    </label>
=======
                <h1>{{ $hamburguesa->nombre }}</h1>
                <p>{{ $hamburguesa->Descripción }}</p>

                <form action="/procesar_pedido" method="POST">
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
                    @csrf <!-- Agrega esto si estás utilizando Blade para evitar el error CSRF -->
                    <div class="botones">
                        <label for="cantidad">
                            <h5>Cantidad</h5>
                        </label>
                        <input type="number" id="cantidad" name="cantidad" min="1" value="1">
                    </div>
<<<<<<< HEAD
                    <button type="submit" id="botonPedir">Pedir</button>
=======
                    <button type="submit" id="botonPedir1">Pedir</button>
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
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
<<<<<<< HEAD
                <div class="btn">
                </div>
=======
            <h1>{{ $hamburguesa->nombre }}</h1>
                <p>{{ $hamburguesa->Descripción }}</p>
                <form action="/procesar_pedido" method="POST">
                    @csrf <!-- Agrega esto si estás utilizando Blade para evitar el error CSRF -->
                    <div class="botones">
                        <label for="cantidad">
                            <h5>Cantidad</h5>
                        </label>
                        <input type="number" id="cantidad" name="cantidad" min="1" value="1">
                    </div>
                    <button type="submit" id="botonPedir2">Pedir</button>
                </form>
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
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
<<<<<<< HEAD


                <div class="btn">
                </div>
            </div>
        </div>



        <div class="Cuadro">
            <div class="img">
                <div class="Calificador" id="calificacion4">
                    <span class="estrella" onclick="calificar(4, 1)">&#9734;</span>
                    <span class="estrella" onclick="calificar(4, 2)">&#9734;</span>
                    <span class="estrella" onclick="calificar(4, 3)">&#9734;</span>
                    <span class="estrella" onclick="calificar(4, 4)">&#9734;</span>
                    <span class="estrella" onclick="calificar(4, 5)">&#9734;</span>
                </div>
            </div>
            <div class="Detalle">
                <div class="btn">
                </div>
            </div>
        </div>



        <div class="Cuadro">
            <div class="img">
                <div class="Calificador" id="calificacion5">
                    <span class="estrella" onclick="calificar(5, 1)">&#9734;</span>
                    <span class="estrella" onclick="calificar(5, 2)">&#9734;</span>
                    <span class="estrella" onclick="calificar(5, 3)">&#9734;</span>
                    <span class="estrella" onclick="calificar(5, 4)">&#9734;</span>
                    <span class="estrella" onclick="calificar(5, 5)">&#9734;</span>
                </div>
            </div>
            <div class="Detalle">
                <div class="btn">
                </div>
            </div>
        </div>



        <div class="Cuadro">
            <div class="img">
                <div class="Calificador" id="calificacion6">
                    <span class="estrella" onclick="calificar(6, 1)">&#9734;</span>
                    <span class="estrella" onclick="calificar(6, 2)">&#9734;</span>
                    <span class="estrella" onclick="calificar(6, 3)">&#9734;</span>
                    <span class="estrella" onclick="calificar(6, 4)">&#9734;</span>
                    <span class="estrella" onclick="calificar(6, 5)">&#9734;</span>
                </div>
            </div>
            <div class="Detalle">
                <div class="btn">
                </div>
            </div>
        </div>
    </div>
    </div>

    <script src="{{ asset('asset/js/hamburguesas.js') }}"></script>
</body>
=======
                <h1>{{ $hamburguesa->nombre }}</h1>
                <p>{{ $hamburguesa->Descripción }}</p>
                <form action="/procesar_pedido" method="POST">
                    @csrf <!-- Agrega esto si estás utilizando Blade para evitar el error CSRF -->
                    <div class="botones">
                        <label for="cantidad">
                            <h5>Cantidad</h5>
                        </label>
                        <input type="number" id="cantidad" name="cantidad" min="1" value="1">
                    </div>
                    <button type="submit" id="botonPedir3">Pedir</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>

    <script src="{{ asset('asset/js/Productos.js') }}"></script>
</body>
>>>>>>> c39d68f1287b61a8d01058ce949e4211f983e026
