<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="card py-3">
        <div class="card-body">
            <form wire:submit.prevent="simpan">
                <div class="row">
                    <div class="col-md-8">
                        <div class="container">
                            <div class="form-title">
                                <h4 class="my-3 fw-bolder">Biodata Pengajar</h4>
                            </div>
                            <div class="alert alert-info alert-dismissible alert-outline fade show" role="alert">
                                Perubahan pada guru tidak akan mempengaruhi account untuk login dari guru yang di edit
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                            <div class="row gy-3">

                                <div class="col-md-8">
                                    <x-form-input name="nama" wire:model.defer="nama" label="Nama Lengkap"  placeholder="Nama Lengkap" />
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="nik"  wire:model.defer="nik" label="NIK" placeholder="352xxxxxxxxx" />
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
                                    <x-form-input name="nama_ibu" wire:model.defer="nama_ibu" label="Nama Ibu" />
                                </div>
                                <div class="col-md-4">
                                    <x-form-select name="provinsi" label="Provinsi *" wire:model="provinsi">
                                        <option value="">Pilih Provinsi</option>
                                        @foreach ($semua_provinsi as $provinsi)
                                            <option value="{{ $provinsi->code }}">{{ $provinsi->name }}</option>
                                        @endforeach
                                    </x-form-select>
                                </div>
                                <div class="col-md-4">
                                    <x-form-select name="kabupaten" label="Kabupaten *" wire:model="kabupaten" >
                                        <option value="">Pilih Kabupaten</option>
                                        @foreach ($semua_kabupaten as $kabupaten)
                                            <option value="{{ $kabupaten->code }}">{{ $kabupaten->name }}</option>
                                        @endforeach
                                    </x-form-select>
                                </div>
                                <div class="col-md-4">
                                    <x-form-select name="kecamatan" label="Kecamatan *" wire:model="kecamatan" >
                                        <option value="">Pilih Kecamatan</option>
                                        @foreach ($semua_kecamatan as $kecamatan)
                                            <option value="{{ $kecamatan->code }}">{{ $kecamatan->name }}</option>
                                        @endforeach
                                    </x-form-select>
                                </div>
                                <div class="col-md-4">
                                    <x-form-select name="kelurahan" label="Keluarahan *" wire:model="kelurahan" >
                                        <option value="">Pilih Kelurahan</option>
                                        @foreach ($semua_kelurahan as $kelurahan)
                                            <option value="{{ $kelurahan->code }}">{{ $kelurahan->name }}</option>
                                        @endforeach
                                    </x-form-select>
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="dusun" wire:model.defer="dusun" label="Dusun" placeholder="Masukan Nama Dusun" />
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="pos" wire:model.defer="pos" label="Kode Pos" placeholder="Masukan Kode Pos" />
                                </div>

                                <div class="col-md-12">
                                    <x-form-textarea name="tempat_tinggal" wire:model.defer="tempat_tinggal" label="Alamat" placeholder="Masukan Alamat" />
                                </div>


                                <div class="col-md-4">
                                    <x-form-input name="email" wire:model.defer="email" label="Email" placeholder="Masukan Email" />
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="no_hp" wire:model.defer="no_hp" label="No HP" placeholder="Masukan No HP" />
                                </div>
                                <div class="col-md-4">
                                    <x-form-select name="pendidikan_terakhir" label="Pendidikan Terakhir" wire:model.defer="pendidikan_terakhir">
                                        <option value="">Pilih Pendidikan</option>
                                        <option value="Tidak Sekolah">Tidak Sekolah</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D1">D1</option>
                                        <option value="D2">D2</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </x-form-select>
                                </div>

                                <div class="col-md-4">
                                    <x-form-select name="jabatan" label="Jabatan *" wire:model.defer="jabatan">
                                        <option value="">Pilih Jabatan</option>
                                        <option value="Kepala Sekolah">Kepala Sekolah</option>
                                        <option value="Wali Kelas">Wali Kelas</option>
                                        <option value="Guru Khusus">Guru Khusus</option>
                                        <option value="Guru Bantu">Bantu</option>
                                        <option value="Wali Kelas">Wali Kelas</option>
                                    </x-form-select>
                                </div>

                                <div class="col-md-4">
                                    <x-form-select name="status_guru" label="Status Guru" wire:model.defer="status_guru">
                                        <option value="">Pilih Status</option>
                                        <option value="Guru Tetap">Guru Tetap</option>
                                        <option value="Guru Tidak Tetap">Guru Tidak Tetap</option>
                                    </x-form-select>
                                </div>

                                <div class="col-md-4">
                                    <x-form-input name="tanggal_masuk" wire:model.defer="tanggal_masuk" label="Tahun Masuk" type="date" placeholder="Masukan Tahun Lulus" />
                                </div>



                                <div class="form-group d-flex justify-content-between my-5">
                                    <button class="btn btn-outline-danger btn-border d-flex align-items-center gap-1">
                                        <i class="las la-undo-alt fs-18"></i>
                                        Reset
                                    </button>
                                    <button class="btn btn-success btn-border d-flex align-middle gap-1">
                                        <i class="ri-save-line"></i>
                                        Simpan Perubahan
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
