<div class="__actions__div <?php if(!empty($showLabels)): ?>with-labels <?php endif; ?>">
    <?php $__currentLoopData = $default; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $action->render(); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php if(!empty($custom)): ?>
        <?php if(!empty($default)): ?>
        <span class="row-action-divider"></span>
        <?php endif; ?>
        <?php $__currentLoopData = $custom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php echo $action->render(); ?>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
</div>
<?php echo $__env->yieldContent('child'); ?>
<?php /**PATH C:\Users\quice\Desktop\Proyecto_Guadalupana\guadalupana-V\vendor\open-admin-org\open-admin\src/../resources/views/grid/actions/actions.blade.php ENDPATH**/ ?>