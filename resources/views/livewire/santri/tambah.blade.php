<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="card rounded border-light">
        <div class="card-header border-bottom border-light">
            <h5 class="mb-0">Tambah Data Siswa</h5>
        </div>
        <div class="card-body bg-soft-light">

            <form wire:submit.prevent="simpan">
                <div class="row">
                    <div class="col-md-8">
                        <div class="container">
                            <div class="row gy-3">
                                <div class="col-md-4">
                                    <x-form-input name="nama_lengkap" wire:model.defer="nama_lengkap" label="Nama Lengkap"
                                                  placeholder="Masukan Nama Lengkap"/>
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="nisn" label="NISN" wire:model.defer="nisn" placeholder="Masukan NISN"
                                                  type="number"/>
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="nik" label="NIK" wire:model.defer="nik" placeholder="Masukan NIK"
                                                  type="number"/>
                                </div>
                                <div class="col-md-8">
                                    <x-form-input name="tempat_lahir" wire:model.defer="tempat_lahir" label="Tempat Lahir"
                                                  placeholder="Masukan Tempat Lahir"/>
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="tanggal_lahir" wire:model.defer="tanggal_lahir" type="date"
                                                  label="Tanggal Lahir"/>
                                </div>

                                <div class="col-md-4">
                                    <x-form-select name="jenis_kelamin" label="Jenis Kelamin"
                                                   wire:model="jenis_kelamin">
                                        <option value="">Pilih Jenis</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </x-form-select>
                                </div>
                                <div class="col-md-4">
                                    <x-form-select name="agama" label="Agama" wire:model="agama">
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
                                    <x-form-input type="number" name="jumlah_saudara" wire:model="jumlah_saudara" label="Jumlah Saudara" placeholder="Masukan Jumlah Saudara" type="number" />
                                </div>

                                <div class="col-md-4">
                                    <x-form-input type="number" name="anak_ke" label="Anak Ke" wire:model="anak_ke" placeholder="Masukan Anak Ke" type="number" />
                                </div>

                                <div class="col-md-4">
                                    <x-form-select name="status_anak" wire:model="status_keluarga" label="Status Anak">
                                        <option value="">Pilih Status</option>
                                        <option value="Anak Kandung">Anak Kandung</option>
                                        <option value="Anak Tiri">Anak Tiri</option>
                                        <option value="Anak Angkat">Anak Angkat</option>
                                    </x-form-select>
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="email" wire:model="email" label="Email"
                                                  placeholder="Masukan Email"/>
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="no_hp" wire:model="no_hp" label="No HP"
                                                  placeholder="Masukan No HP"/>
                                </div>
                                <div class="col-md-8">
                                    <x-form-textarea name="alamat" wire:model="alamat" label="Alamat"
                                                     placeholder="Masukan Alamat"/>
                                </div>
                                <div class="col-md-8">
                                    <x-form-input name="avatar" wire:model="avatar" type="file" label="Foto"/>
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
                    <div class="col-md-3">
                        @if($avatar)
                            <p>Preview Avatar</p>
                            <img src="{{$avatar->temporaryUrl()}}" class="img-fluid img-thumbnail rounded-3" alt="">
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>

</div>
