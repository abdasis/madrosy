<?php
    $theme = $component->getTheme();
?>

<?php if($theme === 'tailwind'): ?>
    <div class="rounded-md shadow-sm">
        <input
            wire:model.stop="<?php echo e($component->getTableName()); ?>.filters.<?php echo e($filter->getKey()); ?>"
            wire:key="<?php echo e($component->getTableName()); ?>-filter-<?php echo e($filter->getKey()); ?>"
            id="<?php echo e($component->getTableName()); ?>-filter-<?php echo e($filter->getKey()); ?>"
            type="date"
            <?php if($filter->hasConfig('min')): ?> min="<?php echo e($filter->getConfig('min')); ?>" <?php endif; ?>
            <?php if($filter->hasConfig('max')): ?> max="<?php echo e($filter->getConfig('max')); ?>" <?php endif; ?>
            class="block w-full border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:text-white dark:border-gray-600"
        />
    </div>
<?php elseif($theme === 'bootstrap-4' || $theme === 'bootstrap-5'): ?>
    <div class="mb-3 mb-md-0 input-group">
        <input
            wire:model.stop="<?php echo e($component->getTableName()); ?>.filters.<?php echo e($filter->getKey()); ?>"
            wire:key="<?php echo e($component->getTableName()); ?>-filter-<?php echo e($filter->getKey()); ?>"
            id="<?php echo e($component->getTableName()); ?>-filter-<?php echo e($filter->getKey()); ?>"
            type="date"
            <?php if($filter->hasConfig('min')): ?> min="<?php echo e($filter->getConfig('min')); ?>" <?php endif; ?>
            <?php if($filter->hasConfig('max')): ?> max="<?php echo e($filter->getConfig('max')); ?>" <?php endif; ?>
            class="form-control"
        />
    </div>
<?php endif; ?>
<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/vendor/livewire-tables/components/tools/filters/date.blade.php ENDPATH**/ ?>