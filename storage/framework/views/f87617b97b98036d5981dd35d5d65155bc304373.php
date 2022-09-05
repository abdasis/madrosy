<?php foreach ((['component']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>

<?php
    $theme = $component->getTheme();
?>

<?php if($component->hasConfigurableAreaFor('before-toolbar')): ?>
    <?php echo $__env->make($component->getConfigurableAreaFor('before-toolbar'), $component->getParametersForConfigurableArea('before-toolbar'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>

<?php if($theme === 'tailwind'): ?>
    <div class="md:flex md:justify-between mb-4 px-4 md:p-0">
        <div class="w-full mb-4 md:mb-0 md:w-2/4 md:flex space-y-4 md:space-y-0 md:space-x-2">
            <?php if($component->hasConfigurableAreaFor('toolbar-left-start')): ?>
                <?php echo $__env->make($component->getConfigurableAreaFor('toolbar-left-start'), $component->getParametersForConfigurableArea('toolbar-left-start'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php if($component->reorderIsEnabled()): ?>
                <button
                    wire:click="<?php echo e($component->currentlyReorderingIsEnabled() ? 'disableReordering' : 'enableReordering'); ?>"
                    type="button"
                    class="inline-flex justify-center items-center w-full md:w-auto px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 active:bg-gray-50 active:text-gray-800 transition ease-in-out duration-150 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600"
                >
                    <?php if($component->currentlyReorderingIsEnabled()): ?>
                        <?php echo app('translator')->get('Done Reordering'); ?>
                    <?php else: ?>
                        <?php echo app('translator')->get('Reorder'); ?>
                    <?php endif; ?>
                </button>
            <?php endif; ?>

            <?php if($component->searchIsEnabled() && $component->searchVisibilityIsEnabled()): ?>
                <div class="flex rounded-md shadow-sm">
                    <input
                        wire:model<?php echo e($component->getSearchOptions()); ?>="<?php echo e($component->getTableName()); ?>.search"
                        placeholder="<?php echo e(__('Search')); ?>"
                        type="text"
                        class="block w-full border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out sm:text-sm sm:leading-5 dark:bg-gray-700 dark:text-white dark:border-gray-600 <?php if($component->hasSearch()): ?> rounded-none rounded-l-md focus:ring-0 focus:border-gray-300 <?php else: ?> focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md <?php endif; ?>"
                    />

                    <?php if($component->hasSearch()): ?>
                        <span wire:click.prevent="clearSearch" class="inline-flex items-center px-3 text-gray-500 bg-gray-50 rounded-r-md border border-l-0 border-gray-300 cursor-pointer sm:text-sm dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </span>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if($component->filtersAreEnabled() && $component->filtersVisibilityIsEnabled() && $component->hasVisibleFilters()): ?>
                <div
                    <?php if($component->isFilterLayoutPopover()): ?>
                        x-data="{ open: false }"
                        x-on:keydown.escape.stop="open = false"
                        x-on:mousedown.away="open = false"
                    <?php endif; ?>

                    class="relative block md:inline-block text-left"
                >
                    <div>
                        <button
                            type="button"
                            class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600"

                            <?php if($component->isFilterLayoutPopover()): ?>
                                x-on:click="open = !open"
                                aria-haspopup="true"
                                x-bind:aria-expanded="open"
                                aria-expanded="true"
                            <?php endif; ?>

                            <?php if($component->isFilterLayoutSlideDown()): ?>
                                x-on:click="filtersOpen = !filtersOpen"
                            <?php endif; ?>
                        >
                            <?php echo app('translator')->get('Filters'); ?>

                            <?php if($count = $component->getFilterBadgeCount()): ?>
                                <span class="ml-1 inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium leading-4 bg-indigo-100 text-indigo-800 capitalize dark:bg-indigo-200 dark:text-indigo-900">
                                    <?php echo e($count); ?>

                                </span>
                            <?php endif; ?>

                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 4a1 1 0 011-1h16a1 1 0 011 1v2.586a1 1 0 01-.293.707l-6.414 6.414a1 1 0 00-.293.707V17l-4 4v-6.586a1 1 0 00-.293-.707L3.293 7.293A1 1 0 013 6.586V4z" />
                            </svg>
                        </button>
                    </div>

                    <?php if($component->isFilterLayoutPopover()): ?>
                        <div
                            x-cloak
                            x-show="open"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="origin-top-left absolute left-0 mt-2 w-full md:w-56 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none z-50 dark:bg-gray-700 dark:text-white dark:divide-gray-600"
                            role="menu"
                            aria-orientation="vertical"
                            aria-labelledby="filters-menu"
                        >
                            <?php $__currentLoopData = $component->getFilters(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($filter->isVisibleInMenus()): ?>
                                    <div class="py-1" role="none">
                                        <div class="block px-4 py-2 text-sm text-gray-700 space-y-1" role="menuitem">
                                            <label for="<?php echo e($component->getTableName()); ?>-filter-<?php echo e($filter->getKey()); ?>"
                                                class="block text-sm font-medium leading-5 text-gray-700 dark:text-white">
                                                <?php echo e($filter->getName()); ?>

                                            </label>

                                            <?php echo e($filter->render($component)); ?>

                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            <?php if($component->hasAppliedVisibleFiltersWithValuesThatCanBeCleared()): ?>
                                <div class="block px-4 py-3 text-sm text-gray-700 dark:text-white" role="menuitem">
                                    <button
                                        wire:click.prevent="setFilterDefaults"
                                        x-on:click="open = false"
                                        type="button"
                                        class="w-full inline-flex items-center justify-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-800 dark:border-gray-600 dark:text-white dark:hover:border-gray-500"
                                    >
                                        <?php echo app('translator')->get('Clear'); ?>
                                    </button>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if($component->hasConfigurableAreaFor('toolbar-left-end')): ?>
                <?php echo $__env->make($component->getConfigurableAreaFor('toolbar-left-end'), $component->getParametersForConfigurableArea('toolbar-left-end'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>

        <div class="md:flex md:items-center space-y-4 md:space-y-0 md:space-x-2">
            <?php if($component->hasConfigurableAreaFor('toolbar-right-start')): ?>
                <?php echo $__env->make($component->getConfigurableAreaFor('toolbar-right-start'), $component->getParametersForConfigurableArea('toolbar-right-start'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php if($component->showBulkActionsDropdown()): ?>
                <div class="w-full md:w-auto mb-4 md:mb-0">
                    <div
                        x-data="{ open: false }"
                        @keydown.window.escape="open = false"
                        x-on:click.away="open = false"
                        class="relative inline-block text-left z-10 w-full md:w-auto"
                    >
                        <div>
                            <span class="rounded-md shadow-sm">
                                <button
                                    x-on:click="open = !open"
                                    type="button"
                                    class="inline-flex justify-center w-full rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600"
                                    aria-haspopup="true"
                                    x-bind:aria-expanded="open"
                                    aria-expanded="true"
                                >
                                    <?php echo app('translator')->get('Bulk Actions'); ?>

                                    <svg class="-mr-1 ml-2 h-5 w-5" x-description="Heroicon name: chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </span>
                        </div>

                        <div
                            x-cloak
                            x-show="open"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="origin-top-right absolute right-0 mt-2 w-full md:w-48 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5 divide-y divide-gray-100 focus:outline-none z-50"
                        >
                            <div class="rounded-md bg-white shadow-xs dark:bg-gray-700 dark:text-white">
                                <div class="py-1" role="menu" aria-orientation="vertical">
                                    <?php $__currentLoopData = $component->getBulkActions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <button
                                            wire:click="<?php echo e($action); ?>"
                                            wire:key="bulk-action-<?php echo e($action); ?>-<?php echo e($component->getTableName()); ?>"
                                            type="button"
                                            class="block w-full px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 hover:text-gray-900 focus:outline-none focus:bg-gray-100 focus:text-gray-900 flex items-center space-x-2 dark:text-white dark:hover:bg-gray-600"
                                            role="menuitem"
                                        >
                                            <span><?php echo e($title); ?></span>
                                        </button>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($component->columnSelectIsEnabled()): ?>
                <div class="mb-4 w-full md:w-auto md:mb-0 md:ml-2">
                    <div
                        x-data="{ open: false }"
                        @keydown.window.escape="open = false"
                        x-on:click.away="open = false"
                        class="inline-block relative w-full text-left md:w-auto"
                        wire:key="column-select-button-<?php echo e($component->getTableName()); ?>"
                    >
                        <div>
                            <span class="rounded-md shadow-sm">
                                <button
                                    x-on:click="open = !open"
                                    type="button"
                                    class="inline-flex justify-center px-4 py-2 w-full text-sm font-medium text-gray-700 bg-white rounded-md border border-gray-300 shadow-sm hover:bg-gray-50 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-700 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600"
                                    aria-haspopup="true"
                                    x-bind:aria-expanded="open"
                                    aria-expanded="true"
                                >
                                    <?php echo app('translator')->get('Columns'); ?>

                                    <svg class="-mr-1 ml-2 w-5 h-5" x-description="Heroicon name: chevron-down" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </span>
                        </div>

                        <div
                            x-cloak
                            x-show="open"
                            x-transition:enter="transition ease-out duration-100"
                            x-transition:enter-start="transform opacity-0 scale-95"
                            x-transition:enter-end="transform opacity-100 scale-100"
                            x-transition:leave="transition ease-in duration-75"
                            x-transition:leave-start="transform opacity-100 scale-100"
                            x-transition:leave-end="transform opacity-0 scale-95"
                            class="absolute right-0 z-50 mt-2 w-full bg-white rounded-md divide-y divide-gray-100 ring-1 ring-black ring-opacity-5 shadow-lg origin-top-right md:w-48 focus:outline-none"
                        >
                            <div class="bg-white rounded-md shadow-xs dark:bg-gray-700 dark:text-white">
                                <div class="p-2" role="menu" aria-orientation="vertical" aria-labelledby="column-select-menu">
                                    <?php $__currentLoopData = $component->getColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($column->isVisible() && $column->isSelectable()): ?>
                                            <div wire:key="columnSelect-<?php echo e($loop->index); ?>-<?php echo e($component->getTableName()); ?>">
                                                <label
                                                    wire:loading.attr="disabled"
                                                    wire:target="selectedColumns"
                                                    class="inline-flex items-center px-2 py-1 disabled:opacity-50 disabled:cursor-wait"
                                                >
                                                    <input
                                                        class="text-indigo-600 rounded border-gray-300 shadow-sm transition duration-150 ease-in-out focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-900 dark:text-white dark:border-gray-600 dark:hover:bg-gray-600 dark:focus:bg-gray-600 disabled:opacity-50 disabled:cursor-wait"
                                                        wire:model="selectedColumns"
                                                        wire:target="selectedColumns"
                                                        wire:loading.attr="disabled"
                                                        type="checkbox"
                                                        value="<?php echo e($column->getSlug()); ?>"
                                                    />
                                                    <span class="ml-2"><?php echo e($column->getTitle()); ?></span>
                                                </label>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($component->paginationIsEnabled() && $component->perPageVisibilityIsEnabled()): ?>
                <div>
                    <select
                        wire:model="perPage"
                        id="perPage"
                        class="block w-full border-gray-300 rounded-md shadow-sm transition duration-150 ease-in-out sm:text-sm sm:leading-5 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-gray-700 dark:text-white dark:border-gray-600"
                    >
                        <?php $__currentLoopData = $component->getPerPageAccepted(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item); ?>" wire:key="per-page-<?php echo e($item); ?>-<?php echo e($component->getTableName()); ?>"><?php echo e($item === -1 ? __('All') : $item); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            <?php endif; ?>

            <?php if($component->hasConfigurableAreaFor('toolbar-right-end')): ?>
                <?php echo $__env->make($component->getConfigurableAreaFor('toolbar-right-end'), $component->getParametersForConfigurableArea('toolbar-right-end'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>
    </div>

    <?php if($component->filtersAreEnabled() && $component->filtersVisibilityIsEnabled() && $component->hasVisibleFilters() && $component->isFilterLayoutSlideDown()): ?>
        <div
            x-cloak
            x-show="filtersOpen"
            x-transition:enter="transition ease-out duration-100"
            x-transition:enter-start="transform opacity-0"
            x-transition:enter-end="transform opacity-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100"
            x-transition:leave-end="transform opacity-0"
        >
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-6 px-4 md:p-0 mb-6">
                <?php $__currentLoopData = $component->getFilters(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($filter->isVisibleInMenus()): ?>
                        <div class="space-y-1">
                            <label for="<?php echo e($component->getTableName()); ?>-filter-<?php echo e($filter->getKey()); ?>"
                                class="block text-sm font-medium leading-5 text-gray-700 dark:text-white">
                                <?php echo e($filter->getName()); ?>

                            </label>

                            <?php echo e($filter->render($component)); ?>

                        </div>
                    <?php endif; ?>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php endif; ?>
<?php elseif($theme === 'bootstrap-4'): ?>
    <div class="d-md-flex justify-content-between mb-3">
        <div class="d-md-flex">
            <?php if($component->hasConfigurableAreaFor('toolbar-left-start')): ?>
                <?php echo $__env->make($component->getConfigurableAreaFor('toolbar-left-start'), $component->getParametersForConfigurableArea('toolbar-left-start'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php if($component->reorderIsEnabled()): ?>
                <div class="mr-0 mr-md-2 mb-3 mb-md-0">
                    <button
                        wire:click="<?php echo e($component->currentlyReorderingIsEnabled() ? 'disableReordering' : 'enableReordering'); ?>"
                        type="button"
                        class="btn btn-default d-block w-100 d-md-inline"
                    >
                        <?php if($component->currentlyReorderingIsEnabled()): ?>
                            <?php echo app('translator')->get('Done Reordering'); ?>
                        <?php else: ?>
                            <?php echo app('translator')->get('Reorder'); ?>
                        <?php endif; ?>
                    </button>
                </div>
            <?php endif; ?>

            <?php if($component->searchIsEnabled() && $component->searchVisibilityIsEnabled()): ?>
                <div class="mb-3 mb-md-0 input-group">
                    <input
                        wire:model<?php echo e($component->getSearchOptions()); ?>="<?php echo e($component->getTableName()); ?>.search"
                        placeholder="<?php echo e(__('Search')); ?>"
                        type="text"
                        class="form-control"
                    >

                    <?php if($component->hasSearch()): ?>
                        <div class="input-group-append">
                            <button wire:click.prevent="clearSearch" class="btn btn-outline-secondary" type="button">
                                <svg style="width:.75em;height:.75em" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>

            <?php if($component->filtersAreEnabled() && $component->filtersVisibilityIsEnabled() && $component->hasVisibleFilters()): ?>
                <div class="ml-0 ml-md-2 mb-3 mb-md-0">
                    <div
                        <?php if($component->isFilterLayoutPopover()): ?>
                            x-data="{ open: false }"
                            x-on:keydown.escape.stop="open = false"
                            x-on:mousedown.away="open = false"
                        <?php endif; ?>

                        class="btn-group d-block d-md-inline"
                    >
                        <div>
                            <button
                                type="button"
                                class="btn dropdown-toggle d-block w-100 d-md-inline"

                                <?php if($component->isFilterLayoutPopover()): ?>
                                    x-on:click="open = !open"
                                    aria-haspopup="true"
                                    x-bind:aria-expanded="open"
                                    aria-expanded="true"
                                <?php endif; ?>

                                <?php if($component->isFilterLayoutSlideDown()): ?>
                                    x-on:click="filtersOpen = !filtersOpen"
                                <?php endif; ?>
                            >
                                <?php echo app('translator')->get('Filters'); ?>

                                <?php if($count = $component->getFilterBadgeCount()): ?>
                                    <span class="badge badge-info">
                                        <?php echo e($count); ?>

                                    </span>
                                <?php endif; ?>

                                <span class="caret"></span>
                            </button>
                        </div>

                        <?php if($component->isFilterLayoutPopover()): ?>
                            <ul
                                x-cloak
                                class="dropdown-menu w-100 mt-md-5"
                                x-bind:class="{'show' : open}"
                                role="menu"
                            >
                                <?php $__currentLoopData = $component->getFilters(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($filter->isVisibleInMenus()): ?>
                                        <div wire:key="<?php echo e($component->getTableName()); ?>-filter-<?php echo e($filter->getKey()); ?>" class="p-2">
                                            <label for="<?php echo e($component->getTableName()); ?>-filter-<?php echo e($filter->getKey()); ?>" class="mb-2">
                                                <?php echo e($filter->getName()); ?>

                                            </label>

                                            <?php echo e($filter->render($component)); ?>

                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                <?php if($component->hasAppliedVisibleFiltersWithValuesThatCanBeCleared()): ?>
                                    <div class="dropdown-divider"></div>

                                    <button
                                        wire:click.prevent="setFilterDefaults"
                                        x-on:click="open = false"
                                        class="dropdown-item btn text-center"
                                    >
                                        <?php echo app('translator')->get('Clear'); ?>
                                    </button>
                                <?php endif; ?>
                            </ul>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($component->hasConfigurableAreaFor('toolbar-left-end')): ?>
                <?php echo $__env->make($component->getConfigurableAreaFor('toolbar-left-end'), $component->getParametersForConfigurableArea('toolbar-left-end'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>

        <div class="d-md-flex">
            <?php if($component->hasConfigurableAreaFor('toolbar-right-start')): ?>
                <?php echo $__env->make($component->getConfigurableAreaFor('toolbar-right-start'), $component->getParametersForConfigurableArea('toolbar-right-start'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php if($component->showBulkActionsDropdown()): ?>
                <div class="mb-3 mb-md-0">
                    <div class="dropdown d-block d-md-inline">
                        <button class="btn dropdown-toggle d-block w-100 d-md-inline" type="button" id="<?php echo e($component->getTableName()); ?>-bulkActionsDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo app('translator')->get('Bulk Actions'); ?>
                        </button>

                        <div class="dropdown-menu dropdown-menu-right w-100" aria-labelledby="<?php echo e($component->getTableName()); ?>-bulkActionsDropdown">
                            <?php $__currentLoopData = $component->getBulkActions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a
                                    href="#"
                                    wire:click="<?php echo e($action); ?>"
                                    wire:key="bulk-action-<?php echo e($action); ?>-<?php echo e($component->getTableName()); ?>"
                                    class="dropdown-item"
                                >
                                    <?php echo e($title); ?>

                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($component->columnSelectIsEnabled()): ?>
                <div class="mb-3 mb-md-0 pl-0 pl-md-2">
                    <div
                        x-data="{ open: false }"
                        x-on:keydown.escape.stop="open = false"
                        x-on:mousedown.away="open = false"
                        class="dropdown d-block d-md-inline"
                        wire:key="column-select-button-<?php echo e($component->getTableName()); ?>"
                    >
                        <button
                            x-on:click="open = !open"
                            class="btn dropdown-toggle d-block w-100 d-md-inline"
                            type="button"
                            id="columnSelect-<?php echo e($component->getTableName()); ?>"
                            aria-haspopup="true"
                            x-bind:aria-expanded="open"
                        >
                            <?php echo app('translator')->get('Columns'); ?>
                        </button>

                        <div
                            class="dropdown-menu dropdown-menu-right w-100 mt-0 mt-md-3"
                            x-bind:class="{'show' : open}"
                            aria-labelledby="columnSelect-<?php echo e($component->getTableName()); ?>"
                        >
                            <?php $__currentLoopData = $component->getColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if($column->isVisible() && $column->isSelectable()): ?>
                                    <div wire:key="columnSelect-<?php echo e($loop->index); ?>-<?php echo e($component->getTableName()); ?>">
                                        <label
                                            wire:loading.attr="disabled"
                                            wire:target="selectedColumns"
                                            class="px-2 <?php echo e($loop->last ? 'mb-0' : 'mb-1'); ?>"
                                        >
                                            <input
                                                wire:model="selectedColumns"
                                                wire:target="selectedColumns"
                                                wire:loading.attr="disabled"
                                                type="checkbox"
                                                value="<?php echo e($column->getSlug()); ?>"
                                            />
                                            <span class="ml-2"><?php echo e($column->getTitle()); ?></span>
                                        </label>
                                    </div>
                                <?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($component->paginationIsEnabled() && $component->perPageVisibilityIsEnabled()): ?>
                <div class="ml-0 ml-md-2">
                    <select
                        wire:model="perPage"
                        id="perPage"
                        class="form-control"
                    >
                        <?php $__currentLoopData = $component->getPerPageAccepted(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item); ?>" wire:key="per-page-<?php echo e($item); ?>-<?php echo e($component->getTableName()); ?>"><?php echo e($item === -1 ? __('All') : $item); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            <?php endif; ?>

            <?php if($component->hasConfigurableAreaFor('toolbar-right-end')): ?>
                <?php echo $__env->make($component->getConfigurableAreaFor('toolbar-right-end'), $component->getParametersForConfigurableArea('toolbar-right-end'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>
    </div>

    <?php if($component->filtersAreEnabled() && $component->filtersVisibilityIsEnabled() && $component->hasVisibleFilters() && $component->isFilterLayoutSlideDown()): ?>
        <div
            x-cloak
            x-show="filtersOpen"
        >
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $component->getFilters(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($filter->isVisibleInMenus()): ?>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                                <label for="<?php echo e($component->getTableName()); ?>-filter-<?php echo e($filter->getKey()); ?>"
                                    class="d-block">
                                    <?php echo e($filter->getName()); ?>

                                </label>

                                <?php echo e($filter->render($component)); ?>

                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php elseif($theme === 'bootstrap-5'): ?>
    <div class="d-md-flex justify-content-between mb-3">
        <div class="d-md-flex">
            <?php if($component->hasConfigurableAreaFor('toolbar-left-start')): ?>
                <?php echo $__env->make($component->getConfigurableAreaFor('toolbar-left-start'), $component->getParametersForConfigurableArea('toolbar-left-start'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php if($component->reorderIsEnabled()): ?>
                <div class="me-0 me-md-2 mb-3 mb-md-0">
                    <button
                        wire:click="<?php echo e($component->currentlyReorderingIsEnabled() ? 'disableReordering' : 'enableReordering'); ?>"
                        type="button"
                        class="btn btn-default d-block w-100 d-md-inline"
                    >
                        <?php if($component->currentlyReorderingIsEnabled()): ?>
                            <?php echo app('translator')->get('Done Reordering'); ?>
                        <?php else: ?>
                            <?php echo app('translator')->get('Reorder'); ?>
                        <?php endif; ?>
                    </button>
                </div>
            <?php endif; ?>

            <?php if($component->searchIsEnabled() && $component->searchVisibilityIsEnabled()): ?>
                <div class="mb-3 mb-md-0 input-group">
                    <div class="search-box w-100">
                        <input
                            wire:model<?php echo e($component->getSearchOptions()); ?>="<?php echo e($component->getTableName()); ?>.search"
                            placeholder="<?php echo e(__('Masukan Pencarian')); ?>"
                            type="text"
                            class="form-control border"
                        >
                        <i class="ri-search-line search-icon"></i>
                    </div>
                    
                </div>
            <?php endif; ?>

            <?php if($component->filtersAreEnabled() && $component->filtersVisibilityIsEnabled() && $component->hasVisibleFilters()): ?>
                <div class="<?php echo e($component->searchIsEnabled() ? 'ms-0 ms-md-2' : ''); ?> mb-3 mb-md-0">
                    <div
                        <?php if($component->isFilterLayoutPopover()): ?>
                            x-data="{ open: false }"
                            x-on:keydown.escape.stop="open = false"
                            x-on:mousedown.away="open = false"
                        <?php endif; ?>

                        class="btn-group d-block d-md-inline"
                    >
                        <div>
                            <button
                                type="button"
                                class="btn border dropdown-toggle d-sm-block w-100 d-md-flex d-lg-flex align-items-center gap-1"

                                <?php if($component->isFilterLayoutPopover()): ?>
                                    x-on:click="open = !open"
                                    aria-haspopup="true"
                                    x-bind:aria-expanded="open"
                                    aria-expanded="true"
                                <?php endif; ?>

                                <?php if($component->isFilterLayoutSlideDown()): ?>
                                    x-on:click="filtersOpen = !filtersOpen"
                                <?php endif; ?>
                            >
                                <i class="ri-filter-2-line"></i>
                                <?php echo app('translator')->get('Filters'); ?>

                                <?php if($count = $component->getFilterBadgeCount()): ?>
                                    <span class="badge badge-soft-info border-info border rounded-circle ms-2">
                                        <?php echo e($count); ?>

                                    </span>
                                <?php endif; ?>

                                <span class="caret"></span>
                            </button>
                        </div>

                        <?php if($component->isFilterLayoutPopover()): ?>
                            <div
                                x-cloak
                                class="dropdown-menu mt-2"
                                x-bind:class="{'show' : open}"
                                role="menu"
                                style="min-width: 300px"
                            >
                                <div class="card-header border-bottom-dashed">Filter Data Berdasarkan:</div>
                                <div class="card-body p-0">
                                    <?php $__currentLoopData = $component->getFilters(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php if($filter->isVisibleInMenus()): ?>
                                            <div wire:key="<?php echo e($component->getTableName()); ?>-filter-<?php echo e($filter->getKey()); ?>" class="p-2">
                                                <label for="<?php echo e($component->getTableName()); ?>-filter-<?php echo e($filter->getKey()); ?>" class="mb-2">
                                                    <?php echo e($filter->getName()); ?>

                                                </label>

                                                <?php echo e($filter->render($component)); ?>

                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    <?php if($component->hasAppliedVisibleFiltersWithValuesThatCanBeCleared()): ?>
                                        <div class="dropdown-divider"></div>

                                        <button
                                            wire:click.prevent="setFilterDefaults"
                                            x-on:click="open = false"
                                            class="dropdown-item text-center"
                                        >
                                            <?php echo app('translator')->get('Clear'); ?>
                                        </button>
                                    <?php endif; ?>
                                </div>

                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($component->hasConfigurableAreaFor('toolbar-left-end')): ?>
                <?php echo $__env->make($component->getConfigurableAreaFor('toolbar-left-end'), $component->getParametersForConfigurableArea('toolbar-left-end'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>

        <div class="d-md-flex">
            <?php if($component->hasConfigurableAreaFor('toolbar-right-start')): ?>
                <?php echo $__env->make($component->getConfigurableAreaFor('toolbar-right-start'), $component->getParametersForConfigurableArea('toolbar-right-start'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>

            <?php if($component->showBulkActionsDropdown()): ?>
                <div class="mb-3 mb-md-0">
                    <div class="dropdown d-block d-md-inline">
                        <button class="btn border dropdown-toggle d-sm-block w-100 d-md-flex d-lg-flex align-items-center gap-1" type="button" id="<?php echo e($component->getTableName()); ?>-bulkActionsDropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="ri-check-double-line"></i>
                            <?php echo app('translator')->get('Bulk Actions'); ?>
                        </button>

                        <div class="dropdown-menu dropdown-menu-end w-100" aria-labelledby="<?php echo e($component->getTableName()); ?>-bulkActionsDropdown">
                            <?php $__currentLoopData = $component->getBulkActions(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $action => $title): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <a
                                    href="#"
                                    wire:click.prevent="<?php echo e($action); ?>"
                                    wire:key="bulk-action-<?php echo e($action); ?>-<?php echo e($component->getTableName()); ?>"
                                    class="dropdown-item"
                                >
                                    <?php echo e($title); ?>

                                </a>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($component->columnSelectIsEnabled()): ?>
                <div class="mb-3 mb-md-0 md-0 ms-md-2">
                    <div
                        x-data="{ open: false }"
                        x-on:keydown.escape.stop="open = false"
                        x-on:mousedown.away="open = false"
                        class="dropdown d-block d-md-inline"
                        wire:key="column-select-button-<?php echo e($component->getTableName()); ?>"
                    >
                        <button
                            x-on:click="open = !open"
                            class="btn border dropdown-toggle d-sm-block w-100 d-md-flex d-lg-flex align-items-center gap-1"
                            type="button"
                            id="columnSelect-<?php echo e($component->getTableName()); ?>"
                            aria-haspopup="true"
                            x-bind:aria-expanded="open"
                        >
                            <i class="ri-layout-2-line"></i>
                            <?php echo app('translator')->get('Columns'); ?>
                        </button>

                        <div
                            class="dropdown-menu dropdown-menu-end mt-2"
                            x-bind:class="{'show' : open}"
                            aria-labelledby="columnSelect-<?php echo e($component->getTableName()); ?>"
                        >
                            <div class="card-header border-bottom-dashed">
                                Pilih Kolom
                            </div>
                            <div class="card-body p-1 pt-2">
                                <?php $__currentLoopData = $component->getColumns(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $column): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if($column->isVisible() && $column->isSelectable()): ?>
                                        <div wire:key="columnSelect-<?php echo e($loop->index); ?>-<?php echo e($component->getTableName()); ?>">
                                            <label
                                                wire:loading.attr="disabled"
                                                wire:target="selectedColumns"
                                                class="px-2 <?php echo e($loop->last ? 'mb-0' : 'mb-1'); ?>"
                                            >
                                                <input
                                                    wire:model="selectedColumns"
                                                    wire:target="selectedColumns"
                                                    wire:loading.attr="disabled"
                                                    type="checkbox"
                                                    value="<?php echo e($column->getSlug()); ?>"
                                                />
                                                <span class="ml-2"><?php echo e($column->getTitle()); ?></span>
                                            </label>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endif; ?>

            <?php if($component->paginationIsEnabled() && $component->perPageVisibilityIsEnabled()): ?>
                <div class="ms-0 ms-md-2">
                    <select
                        wire:model="perPage"
                        id="perPage"
                        class="form-control"
                    >
                        <?php $__currentLoopData = $component->getPerPageAccepted(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($item); ?>" wire:key="per-page-<?php echo e($item); ?>-<?php echo e($component->getTableName()); ?>"><?php echo e($item === -1 ? __('All') : $item); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </select>
                </div>
            <?php endif; ?>

            <?php if($component->hasConfigurableAreaFor('toolbar-right-end')): ?>
                <?php echo $__env->make($component->getConfigurableAreaFor('toolbar-right-end'), $component->getParametersForConfigurableArea('toolbar-righ-end'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php endif; ?>
        </div>
    </div>

    <?php if($component->filtersAreEnabled() && $component->filtersVisibilityIsEnabled() && $component->hasVisibleFilters() && $component->isFilterLayoutSlideDown()): ?>
        <div
            x-cloak
            x-show="filtersOpen"
        >
            <div class="container">
                <div class="row">
                    <?php $__currentLoopData = $component->getFilters(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $filter): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($filter->isVisibleInMenus()): ?>
                            <div class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4">
                                <label for="<?php echo e($component->getTableName()); ?>-filter-<?php echo e($filter->getKey()); ?>"
                                    class="d-block">
                                    <?php echo e($filter->getName()); ?>

                                </label>

                                <?php echo e($filter->render($component)); ?>

                            </div>
                        <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
<?php endif; ?>

<?php if($component->hasConfigurableAreaFor('after-toolbar')): ?>
    <?php echo $__env->make($component->getConfigurableAreaFor('after-toolbar'), $component->getParametersForConfigurableArea('after-toolbar'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php endif; ?>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/vendor/livewire-tables/components/tools/toolbar.blade.php ENDPATH**/ ?>