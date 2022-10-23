<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="card">
        <div class="card-header border-0 d-flex align-items-center gap-1 border-bottom border-light">
            <h1 class="card-title flex-grow-1">Data Semua Kelas</h1>
            <button
                class="btn btn-light btn-border waves-effect d-flex align-items-center gap-1"
                wire:click.prevent="$emitTo('kelas.tambah', 'tambah')"
            >
                <i class="ri-add-line"></i>
                Kelas Baru
            </button>
            <a href="{{route('kelas.migrasi')}}">
                <button
                    class="btn btn-light btn-border d-flex align-items-center gap-1"
                >
                    <i class="ri-settings-2-line"></i>
                    Pengaturan Kelas
                </button>
            </a>

        </div>
        <div class="card-body bg-soft-light">
            <livewire:kelas.tabel/>
        </div>
    </div>
    <livewire:kelas.tambah/>
    <livewire:kelas.edit/>
</div>
