<?php echo $__env->make("admin::form._header", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

       <div class="input-group">
              <input type="file" class="form-control <?php echo e($class, false); ?>" name="<?php echo e($name, false); ?>" <?php echo $attributes; ?> />
              <span class="input-group-btn">
              <?php if(isset($btn)): ?><?php echo $btn; ?><?php endif; ?>
            </span>
        </div>

<?php echo $__env->make("admin::form._footer", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH C:\Users\quice\Desktop\Proyecto_Guadalupana\guadalupana-V\vendor\open-admin-org\open-admin\src/../resources/views/form/file.blade.php ENDPATH**/ ?>