<?php foreach ((['component']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['column' => null, 'customAttributes' => []]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['column' => null, 'customAttributes' => []]); ?>
<?php foreach (array_filter((['column' => null, 'customAttributes' => []]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
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
    <td <?php echo e($attributes
        ->merge($customAttributes)
        ->class(['px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white' => $customAttributes['default'] ?? true])
        ->class(['hidden sm:table-cell' => $column && $column->shouldCollapseOnMobile()])
        ->class(['hidden md:table-cell' => $column && $column->shouldCollapseOnTablet()])
        ->except('default')); ?>><?php echo e($slot); ?></td>
<?php elseif($theme === 'bootstrap-4' || $theme === 'bootstrap-5'): ?>
    <td <?php echo e($attributes
        ->merge($customAttributes)
        ->class(['' => $customAttributes['default'] ?? true])
        ->class(['none d-sm-table-cell' => $column && $column->shouldCollapseOnMobile()])
        ->class(['none d-md-table-cell' => $column && $column->shouldCollapseOnTablet()])
        ->except('default')); ?>><?php echo e($slot); ?></td>
<?php endif; ?>
<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/vendor/livewire-tables/components/table/td/plain.blade.php ENDPATH**/ ?>