<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <i class="ri-qr-code-line fs-3" data-bs-toggle="modal" data-bs-target="#modal-{{$id}}"></i>

    <div class="modal fade" wire:ignore id="modal-{{$id}}" tabindex="-1" data-bs-backdrop="static"
         data-bs-keyboard="false" aria-labelledby="modalBuktiLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header pb-3 border-bottom border-light">
                    <h5 id="modalBuktiLabel">QrCode Kelas</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body bg-soft-light">
                    @if(file_exists(storage_path("app/qrcode/{$file}")))
                        <img src="{{asset("qrcode/{$file}")}}" height="230px" class="img-fluid">
                    @else
                        <div class="alert alert-warning">QR code belum dibuat, silahkan buat dengan cara
                            mengedit kelas yang mau dibuat QR code nya
                        </div>
                    @endif
                </div>
                <div class="modal-footer">
                    <button @if(!file_exists(storage_path("app/qrcode/{$file}"))) disabled
                            @endif  wire:click.prevent="download('{{$file}}')" type="button"
                            class="btn btn-primary d-flex align-items-center gap-2 rounded-3">
                        <i class="ri-download-cloud-2-line"></i>
                        Download
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
