<div>
    
    <i class="ri-qr-code-line fs-3" data-bs-toggle="modal" data-bs-target="#modal-<?php echo e($id); ?>"></i>

    <div class="modal fade" wire:ignore id="modal-<?php echo e($id); ?>" tabindex="-1" data-bs-backdrop="static"
         data-bs-keyboard="false" aria-labelledby="modalBuktiLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header pb-3 border-bottom border-light">
                    <h5 id="modalBuktiLabel">QrCode Kelas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-soft-light">
                    <?php if(file_exists(storage_path("app/qrcode/{$file}"))): ?>
                        <img src="<?php echo e(asset("qrcode/{$file}")); ?>" height="230px" class="img-fluid">
                    <?php else: ?>
                        <div class="alert alert-warning text-wrap">QR code belum dibuat, silahkan buat dengan cara
                            mengedit kelas yang mau di download
                        </div>
                    <?php endif; ?>
                </div>
                <div class="modal-footer">
                    <button <?php if(!file_exists(storage_path("app/qrcode/{$file}"))): ?> disabled
                            <?php endif; ?>  wire:click.prevent="download('<?php echo e($file); ?>')" type="button"
                            class="btn btn-primary d-flex align-items-center gap-2 rounded-3">
                        <i class="ri-download-cloud-2-line"></i>
                        Download
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/kelas/modal.blade.php ENDPATH**/ ?>