<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <x-modal title="Edit Mata Pelajaran" modal="edit-mapel">
        <form wire:submit.prevent="simpan">
            <div class="form-group mb-2">
                <x-form-input label="Kode Mata Pelajaran" wire:model="kode" class="bg-light" readonly name="kode" placeholder="Masukan Kode Kelas" />
            </div>
            <div class="form-group mb-3">
                <x-form-input label="Nama Mata Pelajaran" wire:model="nama" name="nama" placeholder="Masukan Nama Kelas" />
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
