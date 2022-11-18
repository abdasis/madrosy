<?php foreach ((['component', 'row', 'rowIndex']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>
<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag; ?>
<?php foreach($attributes->onlyProps(['column', 'colIndex']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['column', 'colIndex']); ?>
<?php foreach (array_filter((['column', 'colIndex']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $attributes = $attributes->merge(['wire:key' => 'cell-'.$rowIndex.'-'.$colIndex.'-'.$component->id]);
    $theme = $component->getTheme();
    $customAttributes = $component->getTdAttributes($column, $row, $colIndex, $rowIndex)
?>

<?php if($theme === 'tailwind'): ?>
    <td
        <?php if($column->isClickable()): ?>
            onclick="window.open('<?php echo e($component->getTableRowUrl($row)); ?>', '<?php echo e($component->getTableRowUrlTarget($row) ?? '_self'); ?>')"
        <?php endif; ?>

        <?php echo e($attributes->merge($customAttributes)
                ->class(['px-6 py-4 whitespace-nowrap text-sm font-medium dark:text-white' => $customAttributes['default'] ?? true])
                ->class(['hidden sm:table-cell' => $column && $column->shouldCollapseOnMobile()])
                ->class(['hidden md:table-cell' => $column && $column->shouldCollapseOnTablet()])
                ->except('default')); ?>

    >
        <?php echo e($slot); ?>

    </td>
<?php elseif($theme === 'bootstrap-4' || $theme === 'bootstrap-5'): ?>
    <td
        <?php if($column->isClickable()): ?>
            onclick="window.open('<?php echo e($component->getTableRowUrl($row)); ?>', '<?php echo e($component->getTableRowUrlTarget($row) ?? '_self'); ?>')"
            style="cursor:pointer"
        <?php endif; ?>

        <?php echo e($attributes->merge($customAttributes)
                ->class([' align-middle' => $customAttributes['default'] ?? true])
                ->class(['d-none align-middle d-sm-table-cell' => $column && $column->shouldCollapseOnMobile()])
                ->class(['d-none align-middle d-md-table-cell' => $column && $column->shouldCollapseOnTablet()])
                ->except('default')); ?>

    >
        <?php echo e($slot); ?>

    </td>
<?php endif; ?>
<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/vendor/livewire-tables/components/table/td.blade.php ENDPATH**/ ?>