<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="card">
        <div class="card-header border-0">
            <button
                class="btn btn-light btn-border d-flex align-items-center gap-1"
                wire:click.prevent="$emitTo('kelas.tambah', 'tambah')"
            >
                <i class="ri-add-line"></i>
                Kelas Baru
            </button>
        </div>
        <div class="card-body">
            <livewire:kelas.tabel/>
        </div>
    </div>
    <livewire:kelas.tambah/>
    <livewire:kelas.edit/>
</div>
