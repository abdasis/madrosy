<?php foreach ((['component']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>
<?php foreach($attributes->onlyProps(['rowIndex', 'hidden' => false]) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['rowIndex', 'hidden' => false]); ?>
<?php foreach (array_filter((['rowIndex', 'hidden' => false]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
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
    ?>

    <?php if($theme === 'tailwind'): ?>
        <td
            <?php if(! $hidden): ?> x-data="{open:false}" <?php endif; ?>
            <?php echo e($attributes
                    ->merge(['class' => 'p-3 table-cell text-center'])
                    ->class([
                        'md:hidden' =>
                            (($component->shouldCollapseOnMobile() && $component->shouldCollapseOnTablet()) ||
                            ($component->shouldCollapseOnTablet() && ! $component->shouldCollapseOnMobile()))
                    ])
                    ->class(['sm:hidden' => $component->shouldCollapseOnMobile() && ! $component->shouldCollapseOnTablet()])); ?>

        >
            <?php if(! $hidden): ?>
                <button
                    x-on:click.prevent="$dispatch('toggle-row-content', {'row': <?php echo e($rowIndex); ?>});open = !open"
                >
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg"  class="text-green-600 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <svg x-cloak x-show="open" xmlns="http://www.w3.org/2000/svg" class="text-yellow-600 h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            <?php endif; ?>
        </td>
    <?php elseif($theme === 'bootstrap-4' || $theme === 'bootstrap-5'): ?>
        <td
            <?php if(! $hidden): ?> x-data="{open:false}" <?php endif; ?>
            <?php echo e($attributes
                    ->class([
                        'd-md-none' =>
                            (($component->shouldCollapseOnMobile() && $component->shouldCollapseOnTablet()) ||
                            ($component->shouldCollapseOnTablet() && ! $component->shouldCollapseOnMobile()))
                    ])
                    ->class(['d-sm-none' => $component->shouldCollapseOnMobile() && ! $component->shouldCollapseOnTablet()])); ?>

        >
            <?php if(! $hidden): ?>
                <button
                    x-on:click.prevent="$dispatch('toggle-row-content', {'row': <?php echo e($rowIndex); ?>});open = !open"
                    class="p-0"
                    style="background:none;border:none;"
                >
                    <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" class="text-success" style="width:1.4em;height:1.4em;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>

                    <svg x-cloak x-show="open" xmlns="http://www.w3.org/2000/svg" class="text-warning" style="width:1.4em;height:1.4em;" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </button>
            <?php endif; ?>
        </td>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH C:\Users\laila\Documents\GitHub\madrosy\resources\views/vendor/livewire-tables/components/table/td/row-contents.blade.php ENDPATH**/ ?>