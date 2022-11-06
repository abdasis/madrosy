<?php foreach ((['component']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>

<?php
    $theme = $component->getTheme();
?>

<?php if($theme === 'tailwind'): ?>
    <div>
        <?php if($component->filtersAreEnabled() && $component->filterPillsAreEnabled() && $component->hasAppliedVisibleFiltersForPills()): ?>
            <div class="mb-4 px-4 md:p-0">
                <small class="text-gray-700 dark:text-white"><?php echo app('translator')->get('Applied Filters'); ?>:</small>

                <?php $__currentLoopData = $component->getAppliedFiltersWithValues(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filterSelectName => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $filter = $component->getFilterByKey($filterSelectName);
                    ?>

                    <?php if(is_null($filter)) continue; ?>
                    <?php if($filter->isHiddenFromPills()) continue; ?>

                    <span
                        wire:key="<?php echo e($component->getTableName()); ?>-filter-pill-<?php echo e($filter->getKey()); ?>"
                        class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-indigo-100 text-indigo-800 capitalize dark:bg-indigo-200 dark:text-indigo-900"
                    >
                        <?php echo e($filter->getFilterPillTitle()); ?>: <?php echo e($filter->getFilterPillValue($value)); ?>


                        <button
                            wire:click="resetFilter('<?php echo e($filter->getKey()); ?>')"
                            type="button"
                            class="flex-shrink-0 ml-0.5 h-4 w-4 rounded-full inline-flex items-center justify-center text-indigo-400 hover:bg-indigo-200 hover:text-indigo-500 focus:outline-none focus:bg-indigo-500 focus:text-white"
                        >
                            <span class="sr-only"><?php echo app('translator')->get('Remove filter option'); ?></span>
                            <svg class="h-2 w-2" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                                <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7" />
                            </svg>
                        </button>
                    </span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <button
                    wire:click.prevent="setFilterDefaults"
                    class="focus:outline-none active:outline-none"
                >
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 dark:bg-gray-200 dark:text-gray-900">
                        <?php echo app('translator')->get('Clear'); ?>
                    </span>
                </button>
            </div>
        <?php endif; ?>
    </div>
<?php elseif($theme === 'bootstrap-4'): ?>
    <div>
        <?php if($component->filtersAreEnabled() && $component->filterPillsAreEnabled() && $component->hasAppliedVisibleFiltersForPills()): ?>
            <div class="mb-3">
                <small><?php echo app('translator')->get('Applied Filters'); ?>:</small>

                <?php $__currentLoopData = $component->getAppliedFiltersWithValues(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filterSelectName => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $filter = $component->getFilterByKey($filterSelectName);
                    ?>

                    <?php if(is_null($filter)) continue; ?>
                    <?php if($filter->isHiddenFromPills()) continue; ?>

                    <span
                        wire:key="<?php echo e($component->getTableName()); ?>-filter-pill-<?php echo e($filter->getKey()); ?>"
                        class="badge badge-pill badge-info d-inline-flex align-items-center"
                    >
                        <?php echo e($filter->getFilterPillTitle()); ?>: <?php echo e($filter->getFilterPillValue($value)); ?>


                        <a
                            href="#"
                            wire:click="resetFilter('<?php echo e($filter->getKey()); ?>')"
                            class="text-white ml-2"
                        >
                            <span class="sr-only"><?php echo app('translator')->get('Remove filter option'); ?></span>
                            <svg style="width:.5em;height:.5em" stroke="currentColor" fill="none" viewBox="0 0 8 8">
                                <path stroke-linecap="round" stroke-width="1.5" d="M1 1l6 6m0-6L1 7" />
                            </svg>
                        </a>
                    </span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                <a
                    href="#"
                    wire:click.prevent="setFilterDefaults"
                    class="badge badge-pill badge-light"
                >
                    <?php echo app('translator')->get('Clear'); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
<?php elseif($theme === 'bootstrap-5'): ?>
    <div>
        <?php if($component->filtersAreEnabled() && $component->filterPillsAreEnabled() && $component->hasAppliedVisibleFiltersForPills()): ?>
            <div class="mb-3">
                <p class="fw-bolder p-1 m-0"><?php echo app('translator')->get('Applied Filters'); ?>:</p>

                <?php $__currentLoopData = $component->getAppliedFiltersWithValues(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filterSelectName => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php
                        $filter = $component->getFilterByKey($filterSelectName);
                    ?>

                    <?php if(is_null($filter)) continue; ?>
                    <?php if($filter->isHiddenFromPills()) continue; ?>

                    <span
                        wire:key="<?php echo e($component->getTableName()); ?>-filter-pill-<?php echo e($filter->getKey()); ?>"
                        class="badge badge-soft-primary border-primary border rounded-pill py-2 px-3 d-inline-flex align-items-center"
                    >
                        <?php echo e($filter->getFilterPillTitle()); ?>: <?php echo e($filter->getFilterPillValue($value)); ?>

                        <a
                            href="#"
                            wire:click="resetFilter('<?php echo e($filter->getKey()); ?>')"
                            class="text-primary d-flex align-items-center ms-2"
                        >
                            <span class="visually-hidden"><?php echo app('translator')->get('Remove filter option'); ?></span>
                            <i class="ri-close-circle-line"></i>

                        </a>
                    </span>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                
            </div>
        <?php endif; ?>
    </div>
<?php endif; ?>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/vendor/livewire-tables/components/tools/filter-pills.blade.php ENDPATH**/ ?>