<div>
    <?php if($component->debugIsEnabled()): ?>
        <?php
            $debuggable = [
                'query' => $component->getQuerySql(),
                'filters' => $component->getAppliedFilters(),
                'sorts' => $component->getSorts(),
                'search' => $component->getSearch(),
                'select-all' => $component->getSelectAllStatus(),
                'selected' => $component->getSelected(),
            ];
        ?>

        <p><strong><?php echo app('translator')->get('Debugging Values'); ?>:</strong></p>

        <?php if(! app()->runningInConsole()): ?>
            <div class="mb-4"><?php dump($debuggable); ?></div>
        <?php endif; ?>
    <?php endif; ?>
</div>
<?php /**PATH /home/aziz/SKA Project/madrosy/resources/views/vendor/livewire-tables/includes/debug.blade.php ENDPATH**/ ?>