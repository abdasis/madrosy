<div>
    <!-- It is not the man who has too little, but the man who craves more, that is poor. - Seneca -->
    <div
        class="modal fade"
        id="<?php echo e($modal); ?>"
        tabindex="-1"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
        x-data="{
            show: <?php if ((object) ($attributes->wire('model')) instanceof \Livewire\WireDirective) : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($attributes->wire('model')->value()); ?>')<?php echo e($attributes->wire('model')->hasModifier('defer') ? '.defer' : ''); ?><?php else : ?>window.Livewire.find('<?php echo e($_instance->id); ?>').entangle('<?php echo e($attributes->wire('model')); ?>')<?php endif; ?>.defer
        }"
        x-show="show"
        x-on:keydown.escape.window="show = false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><?php echo e($title); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <?php echo e($slot); ?>

                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\Users\laila\Documents\GitHub\madrosy\resources\views/components/modal.blade.php ENDPATH**/ ?>