<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <x-modal title="Tambah Data Kelas" modal="tambah-kelas">
        <form wire:submit.prevent="simpan">
            <div class="form-group mb-3">
                <x-form-input name="kode_kelas" wire:model="kode_kelas" readonly placeholder="Masukan kode kelas" label="Kode Kelas"/>
            </div>
            <div class="form-group mb-3">
                <x-form-input name="nama_kelas" wire:model="nama_kelas" placeholder="Masukan Nama Kelas" label="Nama Kelas"/>
            </div>
            <div class="form-group mb-3">
                <button class="btn btn-border btn-success d-flex gap-1 align-items-center float-end">
                    <i class="ri-save-line"></i>
                    Simpan
                </button>
            </div>
        </form>
    </x-modal>
</div>
