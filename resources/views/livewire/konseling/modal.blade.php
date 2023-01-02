<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <img src="{{$foto}}" class="avatar-xxs rounded-circle" data-bs-toggle="modal" data-bs-target="#modalBukti-{{$id}}"
         alt="">

    <div class="modal fade" wire:ignore id="modalBukti-{{$id}}" tabindex="-1" data-bs-backdrop="static"
         data-bs-keyboard="false"
         aria-labelledby="modalBuktiLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header pb-3 border-bottom border-light">
                    <h5 id="modalBuktiLabel">Gambar Bukti Kejadian</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-soft-light">
                    <img src="{{$foto}}" height="230px" class="img-fluid">
                </div>
                <div class="modal-footer">
                    <button wire:click.prevent="download('{{$path}}')" type="button"
                            class="btn btn-primary d-flex align-items-center gap-2 rounded-3">
                        <i class="ri-download-cloud-2-line"></i>
                        Download
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
