<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    <form wire:submit.prevent="simpan">
        <div class="form-group mb-2">
            <x-form-textarea name="kasus" wire:model="kasus" label="Pelanggaran" placeholder="Masukan nama pelanggaran" />
        </div>
        <div class="form-group mb-2">
            <x-form-input name="bobot" type="number" label="Bobot Pelanggaran" wire:model="bobot" />
        </div>
        <div class="d-flex justify-content-end mt-3">
            <button class="btn btn-success btn-border d-flex align-items-center">
                <i class="ri-save-line fs-14 me-1"></i>
                Simpan
            </button>
        </div>
    </form>
</div>
