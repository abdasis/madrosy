<ul class="list-inline hstack gap-2 mb-0" wire:ignore.self>
    <?php if(!empty($regenerate_token)): ?>
        <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
            title="Regenerate Token">
            <a wire:click.prevent="regenerate('<?php echo e($regenerate_token); ?>')" href="javascript:void(0);"
               class="text-dark d-inline-block">
                <i class="ri-restart-fill fs-16"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if(!empty($detail)): ?>
        <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
            title="Lihat Details">
            <a href="<?php echo e($detail); ?>" class="text-muted d-inline-block">
                <i class="ri-eye-fill fs-16"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if(!empty($editWithModal)): ?>
        <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
            title="Edit">
            <a wire:click.prevent="$emitTo('<?php echo e($editWithModal); ?>' , 'edit' , <?php echo e($id); ?>)" href="/edit/"
               class="text-warning d-inline-block">
                <i class="ri-edit-2-line fs-16"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if(!empty($edit)): ?>
        <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
            title="Edit">
            <a href="<?php echo e($edit); ?>" class="text-warning d-inline-block">
                <i class="ri-edit-2-line fs-16"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if(!empty($hapus)): ?>
        <li class="list-inline-item edit" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-placement="top"
            title="Hapus">
            <a wire:click.prevent="hapus(<?php echo e($hapus); ?>)" href="javascript:void(0);" class="text-danger d-inline-block">
                <i class="ri-delete-bin-5-line fs-16"></i>
            </a>
        </li>
    <?php endif; ?>
    <?php if(!empty($opsi_lanjutan)): ?>
        <li class="list-inline-item">
            <div class="dropdown">
                <button class="btn btn-soft-secondary btn-sm dropdown" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                    <i class="ri-more-fill align-middle"></i>
                </button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item view-item-btn" href="javascript:void(0);"><i
                                class="ri-eye-fill align-bottom me-2 text-muted"></i>View</a></li>
                    <li><a class="dropdown-item edit-item-btn" href="#showModal" data-bs-toggle="modal"><i
                                class="ri-pencil-fill align-bottom me-2 text-muted"></i> Edit</a></li>
                    <li><a class="dropdown-item remove-item-btn" data-bs-toggle="modal" href="#deleteRecordModal"><i
                                class="ri-delete-bin-fill align-bottom me-2 text-muted"></i> Delete</a></li>
                </ul>
            </div>
        </li>
    <?php endif; ?>

</ul>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/tombol-aksi.blade.php ENDPATH**/ ?>