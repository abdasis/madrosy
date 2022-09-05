<?php foreach($attributes->onlyProps(['component']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['component']); ?>
<?php foreach (array_filter((['component']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<?php
    $refresh = $this->getRefreshStatus();
    $theme = $component->getTheme();
?>

 <div
    <?php echo e($attributes->merge($this->getComponentWrapperAttributes())); ?>


    <?php if($component->hasRefresh()): ?>
        wire:poll<?php echo e($component->getRefreshOptions()); ?>

    <?php endif; ?>

    <?php if($component->isFilterLayoutSlideDown()): ?>
        x-data="{ filtersOpen: false }"
    <?php endif; ?>
>
     <?php echo $__env->make('livewire-tables::includes.debug', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
     <?php echo $__env->make('livewire-tables::includes.offline', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

     <?php echo e($slot); ?>

</div>
<?php /**PATH C:\Users\laila\Documents\GitHub\madrosy\resources\views/vendor/livewire-tables/components/wrapper.blade.php ENDPATH**/ ?>