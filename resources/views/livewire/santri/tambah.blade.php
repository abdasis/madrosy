<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="card py-3">
        <div class="card-body">
            <form wire:submit.prevent="simpan">
                <div class="row">
                    <div class="col-md-8">
                        <div class="container">
                            <div class="form-title">
                                <h4 class="my-3 fw-bolder">Data Siswa</h4>
                            </div>
                            <div class="row gy-3">
                                <div class="col-md-4">
                                    <x-form-input name="nama_lengkap"  wire:model.defer="nama_lengkap" label="Nama Lengkap" placeholder="Masukan Nama Lengkap" />
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="nama_panggilan" wire:model.defer="nama_panggilan" label="Nama Panggilan"  placeholder="Masukan Nama Panggilan" />
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="nisn" label="NISN" wire:model.defer="nisn" placeholder="Masukan NISN"  type="number" />
                                </div>
                                <div class="col-md-8">
                                    <x-form-input name="tempat_lahir" wire:model.defer="tempat_lahir" label="Tempat Lahir" placeholder="Masukan Tempat Lahir" />
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="tanggal_lahir" wire:model.defer="tanggal_lahir" type="date" label="Tempat Lahir" />
                                </div>
                                <div class="col-md-4">
                                    <x-form-select name="jenis_kelamin" label="Jenis Kelamin" wire:model.defer="jenis_kelamin">
                                        <option value="">Pilih Jenis</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </x-form-select>
                                </div>
                                <div class="col-md-4">
                                    <x-form-select name="agama" label="Agama" wire:model.defer="agama">
                                        <option value="">Pilih Agama</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Katolik">Katolik</option>
                                        <option value="Hindu">Hindu</option>
                                        <option value="Budha">Budha</option>
                                    </x-form-select>
                                </div>
                                <div class="col-md-4">
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="anak_ke" label="Anak Ke" wire:model.defer="anak_ke" placeholder="Masukan Anak Ke" type="number" />
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="jumlah_saudara" wire:model.defer="jumlah_saudara" label="Jumlah Saudara" placeholder="Masukan Jumlah Saudara" type="number" />
                                </div>
                                <div class="col-md-4">
                                    <x-form-select name="status_anak" wire:model.defer="status_keluarga" label="Status Anak">
                                        <option value="">Pilih Status</option>
                                        <option value="Anak Kandung">Anak Kandung</option>
                                        <option value="Anak Tiri">Anak Tiri</option>
                                        <option value="Anak Angkat">Anak Angkat</option>
                                    </x-form-select>
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="email" wire:model.defer="email" label="Email" placeholder="Masukan Email" />
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="no_hp" wire:model.defer="no_hp" label="No HP" placeholder="Masukan No HP" />
                                </div>
                                <div class="col-md-8">
                                    <x-form-textarea name="alamat" wire:model.defer="alamat" label="Alamat" placeholder="Masukan Alamat" />
                                </div>

                                <div class="form-group d-flex justify-content-between my-5">
                                    <button class="btn btn-outline-danger btn-border d-flex align-middle gap-1">
                                        <i class="ri-delete-back-2-line"></i>
                                        Reset
                                    </button>
                                    <button class="btn btn-success btn-border d-flex align-middle gap-1">
                                        <i class="ri-save-line"></i>
                                        Simpan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
