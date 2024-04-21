<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="<?php echo e(asset('asset/bebidas.css'), false); ?>" rel="stylesheet">
    <title>Document</title>
</head>

<div class="ContainerBebidas">

    <?php $__currentLoopData = $bebidas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bebida): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="Cuadro">
        <div class="img">
            <img src="<?php echo e($bebida->image, false); ?>" alt="Descripción de la imagen">
            <div class="Calificador" id="calificacion1">
                <span class="estrella" onclick="calificar(1, 1)">&#9734;</span>
                <span class="estrella" onclick="calificar(1, 2)">&#9734;</span>
                <span class="estrella" onclick="calificar(1, 3)">&#9734;</span>
                <span class="estrella" onclick="calificar(1, 4)">&#9734;</span>
                <span class="estrella" onclick="calificar(1, 5)">&#9734;</span>
            </div>
        </div>
        <div class="Detalle">
            <h1><?php echo e($bebida->nombre, false); ?></h1>
            <p><?php echo e($bebida->Descripción, false); ?></p>
            <div class="botones">
                <h5><?php echo e($bebida->Stock, false); ?></</h5>
                <div class="BotonPedir">Pedir</div>
            </div>
        </div>
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</div>

<script src="<?php echo e(asset('asset/js/bebidas.js'), false); ?>"></script>
</body>
</html>
<?php /**PATH C:\Users\santi\OneDrive\Escritorio\waos\resources\views//auth/bebidas.blade.php ENDPATH**/ ?>