<div>
    <!-- He who is contented is rich. - Laozi -->
    <div id="<?php echo e($id); ?>" class="modal fade"data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="<?php echo e($label); ?>" aria-hidden="true" style="display: none;">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="<?php echo e($label); ?>"><?php echo e($title); ?></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
                </div>
                <div class="modal-body">
                    <?php echo e($slot); ?>

                </div>
            </div>
        </div>
    </div><!-- /.modal -->
</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/components/modal.blade.php ENDPATH**/ ?>