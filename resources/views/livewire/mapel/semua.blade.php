<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="card">
        <div class="card-header d-flex align-items-center border-bottom border-light">
            <h5 class="mb-0 flex-grow-1 ">Data Mata Pelajaran</h5>
            <button class="btn btn-light btn-border waves-effect" wire:click.prevent="$emitTo('mapel.tambah', 'tambah')">
                <i class="mdi mdi-plus"></i>
                Mata Pelajaran
            </button>
        </div>
        <div class="card-body bg-soft-light">
            <livewire:mapel.tabel/>
        </div>
    </div>

    <livewire:mapel.tambah/>
    <livewire:mapel.edit/>
</div>
