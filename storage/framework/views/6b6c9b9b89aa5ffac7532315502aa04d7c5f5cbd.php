<?php foreach ((['component']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>

<?php
    $theme = $component->getTheme();
?>

<?php if($theme === 'tailwind'): ?>
    <th scope="col" <?php echo e($attributes->merge(['class' => 'table-cell px-3 py-2 md:px-6 md:py-3 text-center md:text-left bg-gray-50 dark:bg-gray-800'])); ?>><?php echo e($slot); ?></th>
<?php elseif($theme === 'bootstrap-4' || $theme === 'bootstrap-5'): ?>
    <th scope="col"><?php echo e($slot); ?></th>
<?php endif; ?>
<?php /**PATH /home/aziz/SKA Project/madrosy/resources/views/vendor/livewire-tables/components/table/th/plain.blade.php ENDPATH**/ ?>