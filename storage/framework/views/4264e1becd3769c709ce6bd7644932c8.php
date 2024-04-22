<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
    <link href="<?php echo e(asset('asset/combos.css'), false); ?>" rel="stylesheet">
</head>

<body>
    <div class="ContainerCombos">
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
                    <?php echo csrf_field(); ?> <!-- Agrega esto si estás utilizando Blade para evitar el error CSRF -->
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
                <div class="btn">
                </div>
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

    <script src="<?php echo e(asset('asset/js/combos.js'), false); ?>"></script>
</body><?php /**PATH C:\Users\santi\OneDrive\Escritorio\waos\resources\views//auth/combos.blade.php ENDPATH**/ ?>