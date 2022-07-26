<?php foreach ((['component']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>
<?php foreach($attributes->onlyProps(['rows']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['rows']); ?>
<?php foreach (array_filter((['rows']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
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

<?php if($component->hasConfigurableAreaFor('before-pagination')): ?>
    <?php echo $__env->make($component->getConfigurableAreaFor('before-pagination'), $component->getParametersForConfigurableArea('before-pagination'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if($theme === 'tailwind'): ?>
    <div>
        <?php if($component->paginationVisibilityIsEnabled()): ?>
            <div class="mt-4 px-4 md:p-0 sm:flex justify-between items-center space-y-4 sm:space-y-0">
                <div>
                    <?php if($component->paginationIsEnabled() && $rows->lastPage() > 1): ?>
                        <p class="paged-pagination-results text-sm text-gray-700 leading-5 dark:text-white">
                            <span><?php echo app('translator')->get('Showing'); ?></span>
                            <span class="font-medium"><?php echo e($rows->firstItem()); ?></span>
                            <span><?php echo app('translator')->get('to'); ?></span>
                            <span class="font-medium"><?php echo e($rows->lastItem()); ?></span>
                            <span><?php echo app('translator')->get('of'); ?></span>
                            <span class="font-medium"><?php echo e($rows->total()); ?></span>
                            <span><?php echo app('translator')->get('results'); ?></span>
                        </p>
                    <?php else: ?>
                        <p class="total-pagination-results text-sm text-gray-700 leading-5 dark:text-white">
                            <?php echo app('translator')->get('Showing'); ?>
                            <span class="font-medium"><?php echo e($rows->count()); ?></span>
                            <?php echo app('translator')->get('results'); ?>
                        </p>
                    <?php endif; ?>
                </div>

                <?php if($component->paginationIsEnabled()): ?>
                    <?php echo e($rows->links('livewire-tables::specific.tailwind.pagination')); ?>

                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
<?php elseif($theme === 'bootstrap-4'): ?>
    <div>
        <?php if($component->paginationVisibilityIsEnabled()): ?>
            <?php if($component->paginationIsEnabled() && $rows->lastPage() > 1): ?>
                <div class="row mt-3">
                    <div class="col-12 col-md-6 overflow-auto">
                        <?php echo e($rows->links('livewire-tables::specific.bootstrap-4.pagination')); ?>

                    </div>

                    <div class="col-12 col-md-6 text-center text-md-right text-muted">
                        <span><?php echo app('translator')->get('Showing'); ?></span>
                        <strong><?php echo e($rows->count() ? $rows->firstItem() : 0); ?></strong>
                        <span><?php echo app('translator')->get('to'); ?></span>
                        <strong><?php echo e($rows->count() ? $rows->lastItem() : 0); ?></strong>
                        <span><?php echo app('translator')->get('of'); ?></span>
                        <strong><?php echo e($rows->total()); ?></strong>
                        <span><?php echo app('translator')->get('results'); ?></span>
                    </div>
                </div>
            <?php else: ?>
                <div class="row mt-3">
                    <div class="col-12 text-muted">
                        <?php echo app('translator')->get('Showing'); ?>
                        <strong><?php echo e($rows->count()); ?></strong>
                        <?php echo app('translator')->get('results'); ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
<?php elseif($theme === 'bootstrap-5'): ?>
    <div>
        <?php if($component->paginationVisibilityIsEnabled()): ?>
            <?php if($component->paginationIsEnabled() && $rows->lastPage() > 1): ?>
                <div class="row mt-3">
                    <div class="col-12 col-md-6 overflow-auto">
                        <?php echo e($rows->links('livewire-tables::specific.bootstrap-4.pagination')); ?>

                    </div>

                    <div class="col-12 col-md-6 text-center text-md-end text-muted">
                        <span><?php echo app('translator')->get('Showing'); ?></span>
                        <strong><?php echo e($rows->count() ? $rows->firstItem() : 0); ?></strong>
                        <span><?php echo app('translator')->get('to'); ?></span>
                        <strong><?php echo e($rows->count() ? $rows->lastItem() : 0); ?></strong>
                        <span><?php echo app('translator')->get('of'); ?></span>
                        <strong><?php echo e($rows->total()); ?></strong>
                        <span><?php echo app('translator')->get('results'); ?></span>
                    </div>
                </div>
            <?php else: ?>
                <div class="row mt-3">
                    <div class="col-12 text-muted">
                        <?php echo app('translator')->get('Showing'); ?>
                        <strong><?php echo e($rows->count()); ?></strong>
                        <?php echo app('translator')->get('results'); ?>
                    </div>
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
<?php endif; ?>

<?php if($component->hasConfigurableAreaFor('after-pagination')): ?>
    <?php echo $__env->make($component->getConfigurableAreaFor('after-pagination'), $component->getParametersForConfigurableArea('after-pagination'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH E:\GitHub\madrosy\resources\views/vendor/livewire-tables/components/pagination.blade.php ENDPATH**/ ?>