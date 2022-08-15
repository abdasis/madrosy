<div>
    {{-- Be like water. --}}
    <div class="card">
        <div class="card-header border-bottom-dashed d-flex">
            <h4 class="card-title mb-0 flex-grow-1">Data Tahun Ajaran</h4>
            <a href="{{route('tahun-ajaran.tambah')}}">
                <button class="btn btn-sm btn-light btn-border d-flex align-items-center gap-1">
                    <i class="ri-add-fill"></i>
                    Tambah Data
                </button>
            </a>
        </div>
        <div class="card-body">
            <livewire:tahun-ajaran.tabel/>
        </div>
    </div>
</div>
