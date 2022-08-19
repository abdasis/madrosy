<div>
    
    <div id="myModal" class="modal fade" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;" wire:ignore.self>
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalLabel"><?php echo e($title); ?></h5>
                    <button wire:click.prevent="$emit('closeModal')" type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <?php echo e($slot); ?>

                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        window.livewire.on('closeModal', function () {
            $('#myModal').modal('hide');
        });

        Livewire.on('openModal', function (event){
            $('#myModal').modal('show');
        });
    </script>

<?php $__env->stopPush(); ?>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/modal.blade.php ENDPATH**/ ?>