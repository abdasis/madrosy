<div>
    <div class="card">
        <div class="card-header d-flex align-items-center border-bottom border-light">
            <h5 class="flex-grow-1 mb-0">Data Tata Tertib Sekolah</h5>
            <button wire:click.prevent="$emit('modalTambah', 'pelanggaran.tambah')" class="btn waves-effect btn-sm btn-light d-flex align-items-center gap-1 btn-border rounded-3" >
                <i class="ri-add-line"></i>
                <span>Pelanggaran</span>
            </button>
        </div>
        <div class="card-body bg-soft-light">
            <livewire:pelanggaran.tabel/>
        </div>
    </div>
    <livewire:modal/>
</div>
