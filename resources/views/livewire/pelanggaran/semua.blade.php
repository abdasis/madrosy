<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <div class="card">
        <div class="card-header d-flex align-items-center border-bottom-dashed">
            <h4 class="card-title flex-grow-1 mb-0">Data Tata Tertib Sekolah</h4>
            <button wire:click.prevent="$emit('modalTambah', 'pelanggaran.tambah')" class="btn waves-effect btn-light d-flex align-items-center gap-1 btn-border rounded-3" >
                <i class="ri-add-line"></i>
                <span>Pelanggaran</span>
            </button>
        </div>
        <div class="card-body">
            <livewire:pelanggaran.tabel/>
        </div>
    </div>
    <livewire:modal/>
</div>
