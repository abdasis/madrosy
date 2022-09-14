<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="card">
        <div class="card-header border-bottom-dashed d-flex align-items-center">
            <h5 class="mb-0 flex-grow-1">Semua Jadwal</h5>
            <a href="{{route('jadwal.tambah')}}">
                <button class="btn btn-light btn-border d-flex gap-1 align-items-center">
                    <i class="ri-add-line"></i>
                    Jadwal Baru
                </button>
            </a>
        </div>
        <div class="card-body">
            <livewire:jadwal.tabel/>
        </div>
    </div>
</div>
