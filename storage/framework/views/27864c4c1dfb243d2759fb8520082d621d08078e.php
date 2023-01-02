<?php $__errorArgs = [$name, $bag];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
    <div <?php echo $attributes->merge(['class' => 'invalid-feedback']); ?>>
        <?php echo e($message); ?>

    </div>
<?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?><?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/vendor/form-components/bootstrap-5/form-errors.blade.php ENDPATH**/ ?>