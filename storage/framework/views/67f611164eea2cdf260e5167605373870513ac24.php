<?php foreach ((['component']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>

<?php
    $theme = $component->getTheme();
?>

<?php if($theme === 'tailwind'): ?>
    <div class="flex-col">
        <?php echo e($slot); ?>

    </div>
<?php elseif($theme === 'bootstrap-4' || $theme === 'bootstrap-5'): ?>
    <div class="d-flex flex-column">
        <?php echo e($slot); ?>

    </div>
<?php endif; ?>
<?php /**PATH /home/aziz/SKA Project/madrosy/resources/views/vendor/livewire-tables/components/tools.blade.php ENDPATH**/ ?>