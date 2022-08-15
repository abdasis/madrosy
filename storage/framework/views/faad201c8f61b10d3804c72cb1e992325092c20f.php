<div>
    
    <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel"><?php echo e($title); ?></h5>
                    <button wire:click.prevent="$emit('closeModal')" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <?php if($body): ?>
                        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount($body, ['model_id' => $model])->html();
} elseif ($_instance->childHasBeenRendered('l2751548085-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l2751548085-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l2751548085-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l2751548085-0');
} else {
    $response = \Livewire\Livewire::mount($body, ['model_id' => $model]);
    $html = $response->html();
    $_instance->logRenderedChild('l2751548085-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
                    <?php endif; ?>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

<?php $__env->startPush('scripts'); ?>
    <script>

    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/modal.blade.php ENDPATH**/ ?>