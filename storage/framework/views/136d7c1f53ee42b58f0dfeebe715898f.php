<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link href="<?php echo e(asset('asset/heladeria.css'), false); ?>" rel="stylesheet">
</head>


<div class="Titulo">Helados</div>

<div class="ContainerHeladeria">
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
        <h1>Helado Especial</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis auctor turpis nec velit pretium, 
            </p>
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
            </div>

            <div class="botones">
                <label for="cantidad">
                    <h4>Cantidad</h4>
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
            </div>

            <div class="botones">
                <label for="cantidad">
                    <h4>Cantidad</h4>
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
            </div>

            <div class="botones">
                <label for="cantidad">
                    <h4>Cantidad</h4>
                </label>
                <input type="number" id="cantidad" name="cantidad" min="1" value="1">
            </div>
            <button type="submit" id="botonPedir">Pedir</button>
            </form>
    </div>
</div>


<script src="<?php echo e(asset('asset/js/heladeria.js'), false); ?>"></script><?php /**PATH C:\Users\santi\OneDrive\Escritorio\waos\resources\views//auth/heladeria.blade.php ENDPATH**/ ?>