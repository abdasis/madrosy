<?php foreach ((['component']) as $__key => $__value) {
    $__consumeVariable = is_string($__key) ? $__key : $__value;
    $$__consumeVariable = is_string($__key) ? $__env->getConsumableComponentData($__key, $__value) : $__env->getConsumableComponentData($__value);
} ?>

<?php
    $theme = $component->getTheme();

    $customAttributes = [
        'wrapper' => $this->getTableWrapperAttributes(),
        'table' => $this->getTableAttributes(),
        'thead' => $this->getTheadAttributes(),
        'tbody' => $this->getTbodyAttributes(),
    ];
?>

<?php if($theme === 'tailwind'): ?>
    <div <?php echo e($attributes->merge($customAttributes['wrapper'])
            ->class(['shadow overflow-y-scroll border-b border-gray-200 dark:border-gray-700 sm:rounded-lg' => $customAttributes['wrapper']['default'] ?? true])
            ->except('default')); ?>>
        <table <?php echo e($attributes->merge($customAttributes['table'])
                ->class(['min-w-full divide-y divide-gray-200 dark:divide-none' => $customAttributes['table']['default'] ?? true])
                ->except('default')); ?>>
            <thead <?php echo e($attributes->merge($customAttributes['thead'])
                    ->class(['bg-gray-50' => $customAttributes['thead']['default'] ?? true])
                    ->except('default')); ?>>
                <tr>
                    <?php echo e($thead); ?>

                </tr>
            </thead>
            <tbody
                <?php if($component->reorderIsEnabled()): ?>
                    wire:sortable="<?php echo e($component->getReorderMethod()); ?>"
                <?php endif; ?>

                <?php echo e($attributes->merge($customAttributes['tbody'])
                        ->class(['bg-white divide-y divide-gray-200 dark:bg-gray-800 dark:divide-none' => $customAttributes['tbody']['default'] ?? true])
                        ->except('default')); ?>

            >
                <?php echo e($slot); ?>

            </tbody>

            <?php if(isset($tfoot)): ?>
                <tfoot>
                    <?php echo e($tfoot); ?>

                </tfoot>
            <?php endif; ?>
        </table>
    </div>
<?php elseif($theme === 'bootstrap-4' || $theme === 'bootstrap-5'): ?>
    <div>
        <div <?php echo e($attributes->merge($customAttributes['wrapper'])
            ->class(['table-responsive table-card my-3' => $customAttributes['wrapper']['default'] ?? true])
            ->except('default')); ?>>
            <table <?php echo e($attributes->merge($customAttributes['table'])
                ->class(['table table-sm table-striped table-nowrap' => $customAttributes['table']['default'] ?? true])
                ->except('default')); ?>>
                <thead <?php echo e($attributes->merge($customAttributes['thead'])
                    ->class(['' => $customAttributes['thead']['default'] ?? true])
                    ->except('default')); ?>>
                <tr>
                    <?php echo e($thead); ?>

                </tr>
                </thead>

                <tbody
                    <?php if($component->reorderIsEnabled()): ?>
                        wire:sortable="<?php echo e($component->getReorderMethod()); ?>"
                    <?php endif; ?>

                    <?php echo e($attributes->merge($customAttributes['tbody'])
                            ->class(['' => $customAttributes['tbody']['default'] ?? true])
                            ->except('default')); ?>

                >
                <?php echo e($slot); ?>

                </tbody>

                <?php if(isset($tfoot)): ?>
                    <tfoot>
                    <?php echo e($tfoot); ?>

                    </tfoot>
                <?php endif; ?>
            </table>
        </div>
    </div>
<?php endif; ?>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/vendor/livewire-tables/components/table.blade.php ENDPATH**/ ?>