<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
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

    <div class="Titulo">Helados</div>

    <div class="ContainerProductos">
        @foreach ($helados as $helado)
            <div class="Cuadro">
                <div class="img1">
                    <img src="{{ $helado->image }}" alt="Descripción de la imagen">
                    <div class="Calificador" id="calificacion1">
                        <span class="estrella" onclick="calificar(1, 1)">&#9734;</span>
                        <span class="estrella" onclick="calificar(1, 2)">&#9734;</span>
                        <span class="estrella" onclick="calificar(1, 3)">&#9734;</span>
                        <span class="estrella" onclick="calificar(1, 4)">&#9734;</span>
                        <span class="estrella" onclick="calificar(1, 5)">&#9734;</span>
                    </div>
                </div>
                <div class="Detalle">
                    <h1>{{ $helado->nombre }}</h1>
                    <p>{{ $helado->Descripción }}</p>

                    <div class="Sabores">
                        <h3>Sabores:</h3>
                        <form id="saboresForm">
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
                            <label class="Sabor" id="sabor3">
                                <input type="checkbox" name="sabor" value="Fresa" class="SaborCheckbox-button">
                                <div class="SaborImagen"></div>
                                <span class="texto-descriptivo">Fresa</span>
                            </label>
                            <label class="Sabor" id="sabor4">
                                <input type="checkbox" name="sabor" value="Chicle" class="SaborCheckbox-button">
                                <div class="SaborImagen"></div>
                                <span class="texto-descriptivo">Chicle</span>
                            </label>
                        </form>
                    </div>

                    <div class="botones">
                        <label for="cantidad">
                            <h4>Cantidad</h4>
                        </label>
                        <input type="number" id="cantidad" name="cantidad" min="1" value="1">
                    </div>
                    <button type="submit" id="botonPedir1">Pedir</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/noty/3.1.4/noty.min.js"></script>
    <script src="{{ asset('asset/js/Productos.js') }}"></script>
</body>

</html>
