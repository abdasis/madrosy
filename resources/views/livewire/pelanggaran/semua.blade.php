<div>
    <div class="card">
        <div class="card-header d-flex align-items-center border-bottom border-light">
            <h5 class="flex-grow-1 mb-0">Data Tata Tertib Sekolah</h5>
            <button wire:click.prevent="$emitTo('pelanggaran.tambah', 'tambah')"
                    class="btn waves-effect btn-light btn-border d-flex align-items-center gap-1  rounded-3">
                <i class="ri-add-line"></i>
                <span>Pelanggaran</span>
            </button>
        </div>
        <div class="card-body bg-soft-light">
            <livewire:pelanggaran.tabel/>
        </div>
    </div>
    <livewire:pelanggaran.tambah/>
{{--    <livewire:pelanggaran.edit/>--}}
</div>
