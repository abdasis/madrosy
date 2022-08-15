<div>
    {{-- In work, do what you enjoy. --}}
    <div class="card">
        <div class="card-header border-bottom-dashed d-flex align-items-center">
            <h4 class="card-title mb-0 flex-grow-1 align-items-center d-flex gap-1">
                <i class="ri-bank-card-2-line"></i>
                <span>Semua Rekening</span>
            </h4>
            <a href="{{route('rekening.tambah')}}">
                <button class="btn btn-light rounded-3 btn-border btn-sm d-flex align-items-center gap-1">
                    <i class="ri-add-circle-line"></i>
                    <span>Rekening</span>
                </button>
            </a>
        </div>
        <div class="card-body">
            <livewire:rekening.tabel/>
        </div>
    </div>
</div>
