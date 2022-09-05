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

<?php if($component->collapsingColumnsAreEnabled() && $component->hasCollapsedColumns()): ?>
    <?php
        $theme = $component->getTheme();
        $columns = collect([]);

        if ($component->shouldCollapseOnMobile() && $component->shouldCollapseOnTablet()) {
            $columns->push($component->getCollapsedMobileColumns());
            $columns->push($component->getCollapsedTabletColumns());
        } elseif ($component->shouldCollapseOnTablet() && ! $component->shouldCollapseOnMobile()) {
            $columns->push($component->getCollapsedTabletColumns());
        } elseif ($component->shouldCollapseOnMobile() && ! $component->shouldCollapseOnTablet()) {
            $columns->push($component->getCollapsedMobileColumns());
        }

        $columns = $columns->collapse();

        // TODO: Column count
        $colspan = $columns->count() + 1;
    ?>

    <?php if($theme === 'tailwind'): ?>
        <tr
            wire:key="row-<?php echo e($rowIndex); ?>-collapsed-contents"
            wire:loading.class.delay="opacity-50 dark:bg-gray-900 dark:opacity-60"
            x-data
            @toggle-row-content.window="$event.detail.row === <?php echo e($rowIndex); ?> ? $el.classList.toggle('hidden') : null"
            class="hidden md:hidden bg-white dark:bg-gray-700 dark:text-white"
        >
            <td class="pt-4 pb-2 px-4" colspan="<?php echo e($colspan); ?>">
                <div>
                    <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $colIndex => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($column->isHidden()) continue; ?>
                        <?php if($this->columnSelectIsEnabled() && ! $this->columnSelectIsEnabledForColumn($column)) continue; ?>
                        
                        <p class="block mb-2 <?php if($column->shouldCollapseOnMobile()): ?> sm:hidden <?php endif; ?> <?php if($column->shouldCollapseOnTablet()): ?> md:hidden <?php endif; ?>">
                            <strong><?php echo e($column->getTitle()); ?></strong>: <?php echo e($column->renderContents($row)); ?>

                        </p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </td>
        </tr>
    <?php elseif($theme === 'bootstrap-4' || $theme === 'bootstrap-5'): ?>
        <tr
            wire:key="row-<?php echo e($rowIndex); ?>-collapsed-contents"
            x-data
            @toggle-row-content.window="$event.detail.row === <?php echo e($rowIndex); ?> ? $el.classList.toggle('d-none') : null"
            class="d-none d-md-none"
        >
            <td class="pt-3 p-2" colspan="<?php echo e($colspan); ?>">
                <div>
                    <?php $__currentLoopData = $columns; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $colIndex => $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($column->isHidden()) continue; ?>
                        <?php if($this->columnSelectIsEnabled() && ! $this->columnSelectIsEnabledForColumn($column)) continue; ?>
                        
                        <p class="d-block mb-2 <?php if($column->shouldCollapseOnMobile()): ?> d-sm-none <?php endif; ?> <?php if($column->shouldCollapseOnTablet()): ?> d-md-none <?php endif; ?>">
                            <strong><?php echo e($column->getTitle()); ?></strong>: <?php echo e($column->renderContents($row)); ?>

                        </p>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </td>
        </tr>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\Users\laila\Documents\GitHub\madrosy\resources\views/vendor/livewire-tables/components/table/row-contents.blade.php ENDPATH**/ ?>