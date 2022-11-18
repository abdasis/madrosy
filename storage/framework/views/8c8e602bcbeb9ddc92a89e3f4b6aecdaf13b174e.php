<?php foreach ((['component']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['customAttributes' => []]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['customAttributes' => []]); ?>
<?php foreach (array_filter((['customAttributes' => []]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $theme = $component->getTheme();
?>

<?php if($theme === 'tailwind'): ?>
    <tr <?php echo e($attributes
        ->merge($customAttributes)
        ->class(['bg-white dark:bg-gray-700 dark:text-white' => $customAttributes['default'] ?? true])
        ->except('default')); ?>>
        <?php echo e($slot); ?>

    </tr>
<?php elseif($theme === 'bootstrap-4' || $theme === 'bootstrap-5'): ?>
    <tr <?php echo e($attributes
        ->merge($customAttributes)
        ->class(['' => $customAttributes['default'] ?? true])
        ->except('default')); ?>>
        <?php echo e($slot); ?>

    </tr>
<?php endif; ?>
<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/vendor/livewire-tables/components/table/tr/plain.blade.php ENDPATH**/ ?>