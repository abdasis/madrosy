<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <x-modal title="Tambah Mata Pelajaran" modal="tambah-mapel">
        <form wire:submit.prevent="simpan">
            <div class="form-group mb-2">
                <x-form-input label="Kode Mapel" wire:model="kode" class="bg-light" readonly name="kode" placeholder="Masukan Kode Mapel" />
            </div>
            <div class="form-group mb-3">
                <x-form-input label="Nama Mapel" wire:model="nama" name="nama" placeholder="Masukan Nama Mapel" />
            </div>
            <div class="form-group text-end mb-3">
                <button class="btn btn-success btn-border">
                    <i class="mdi mdi-content-save"></i>
                    Simpan
                </button>
            </div>
        </form>
    </x-modal>
</div>
