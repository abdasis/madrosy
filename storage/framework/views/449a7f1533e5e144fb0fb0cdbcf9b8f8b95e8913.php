<?php
    $theme = $component->getTheme();
?>

<?php if($theme === 'tailwind'): ?>
    <?php if($status): ?>
        <?php if($type === 'icons'): ?>
            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 <?php if($successValue === true): ?> text-green-500 <?php else: ?> text-red-500 <?php endif; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        <?php elseif($type === 'yes-no'): ?>
            <?php if($successValue === true): ?>
                <span>Yes</span>
            <?php else: ?>
                <span>No</span>
            <?php endif; ?>
        <?php endif; ?>
    <?php else: ?>
        <?php if($type === 'icons'): ?>
            <svg xmlns="http://www.w3.org/2000/svg" class="inline-block h-5 w-5 <?php if($successValue === false): ?> text-green-500 <?php else: ?> text-red-500 <?php endif; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        <?php elseif($type === 'yes-no'): ?>
            <?php if($successValue === false): ?>
                <span>Yes</span>
            <?php else: ?>
                <span>No</span>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
<?php elseif($theme === 'bootstrap-4' || $theme === 'bootstrap-5'): ?>
    <?php if($status): ?>
        <?php if($type === 'icons'): ?>
            <svg xmlns="http://www.w3.org/2000/svg" style="width:1.2em;height:1.2em;" class="d-inline-block <?php if($successValue === true): ?> text-success <?php else: ?> text-danger <?php endif; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        <?php elseif($type === 'yes-no'): ?>
            <?php if($successValue === true): ?>
                <span>Yes</span>
            <?php else: ?>
                <span>No</span>
            <?php endif; ?>
        <?php endif; ?>
    <?php else: ?>
        <?php if($type === 'icons'): ?>
            <svg xmlns="http://www.w3.org/2000/svg" style="width:1.2em;height:1.2em;" class="d-inline-block <?php if($successValue === false): ?> text-success <?php else: ?> text-danger <?php endif; ?>" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
        <?php elseif($type === 'yes-no'): ?>
            <?php if($successValue === false): ?>
                <span>Yes</span>
            <?php else: ?>
                <span>No</span>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
<?php endif; ?>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/vendor/livewire-tables/includes/columns/boolean.blade.php ENDPATH**/ ?>