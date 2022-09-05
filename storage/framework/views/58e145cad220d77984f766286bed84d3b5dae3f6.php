<?php foreach ((['component']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>
<?php foreach($attributes->onlyProps(['row', 'rowIndex']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['row', 'rowIndex']); ?>
<?php foreach (array_filter((['row', 'rowIndex']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $attributes = $attributes->merge(['wire:key' => 'row-'.$rowIndex.'-'.$component->id]);
    $theme = $component->getTheme();
    $customAttributes = $this->getTrAttributes($row, $rowIndex);
?>

<?php if($theme === 'tailwind'): ?>
    <tr
        wire:loading.class.delay="opacity-50 dark:bg-gray-900 dark:opacity-60"

        <?php if($component->reorderIsEnabled() && $component->currentlyReorderingIsEnabled()): ?>
            wire:sortable.item="<?php echo e($row->getKey()); ?>"
        <?php endif; ?>

        <?php echo e($attributes->merge($customAttributes)
                ->class(['bg-white dark:bg-gray-700 dark:text-white' => ($customAttributes['default'] ?? true) && $rowIndex % 2 === 0])
                ->class(['bg-gray-50 dark:bg-gray-800 dark:text-white' => ($customAttributes['default'] ?? true) && $rowIndex % 2 !== 0])
                ->class(['cursor-pointer' => $component->hasTableRowUrl()])
                ->except('default')); ?>

    >
        <?php echo e($slot); ?>

    </tr>
<?php elseif($theme === 'bootstrap-4' || $theme === 'bootstrap-5'): ?>
    <tr
        wire:loading.class.delay=""
        
        <?php if($component->reorderIsEnabled() && $component->currentlyReorderingIsEnabled()): ?>
            wire:sortable.item="<?php echo e($row->getKey()); ?>"
        <?php endif; ?>

        <?php echo e($attributes->merge($customAttributes)
                ->class(['' => ($customAttributes['default'] ?? true) && $rowIndex % 2 === 0])
                ->class(['' => ($customAttributes['default'] ?? true) && $rowIndex % 2 !== 0])
                ->except('default')); ?>

    >
        <?php echo e($slot); ?>

    </tr>
<?php endif; ?>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/vendor/livewire-tables/components/table/tr.blade.php ENDPATH**/ ?>