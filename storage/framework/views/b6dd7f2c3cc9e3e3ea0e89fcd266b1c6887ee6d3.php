<?php foreach ((['component']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>

<?php if($component->collapsingColumnsAreEnabled() && $component->hasCollapsedColumns()): ?>
    <?php
        $theme = $component->getTheme();
    ?>

    <?php if($theme === 'tailwind'): ?>
        <th
            scope="col"
            <?php echo e($attributes
                    ->merge(['class' => 'table-cell dark:bg-gray-800'])
                    ->class([
                        'md:hidden' =>
                            (($component->shouldCollapseOnMobile() && $component->shouldCollapseOnTablet()) ||
                            ($component->shouldCollapseOnTablet() && ! $component->shouldCollapseOnMobile()))
                    ])
                    ->class(['sm:hidden' => $component->shouldCollapseOnMobile() && ! $component->shouldCollapseOnTablet()])); ?>

        ></th>
    <?php elseif($theme === 'bootstrap-4' || $theme === 'bootstrap-5'): ?>
        <th
            scope="col"
            <?php echo e($attributes
                    ->merge(['class' => 'd-table-cell'])
                    ->class([
                        'd-md-none' =>
                            (($component->shouldCollapseOnMobile() && $component->shouldCollapseOnTablet()) ||
                            ($component->shouldCollapseOnTablet() && ! $component->shouldCollapseOnMobile()))
                    ])
                    ->class(['d-sm-none' => $component->shouldCollapseOnMobile() && ! $component->shouldCollapseOnTablet()])); ?>

        ></th>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/vendor/livewire-tables/components/table/th/row-contents.blade.php ENDPATH**/ ?>