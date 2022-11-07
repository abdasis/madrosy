<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="card py-3">
        <div class="card-body">
            <form wire:submit.prevent="simpan">
                <div class="row">
                    <div class="col-md-8">
                        <div class="container">
                            <div class="row gy-3">
                                <div class="form-title">
                                    <h4 class="my-2 fw-bold d-flex align-items-center">
                                        <i class="ri-user-follow-line"></i>
                                        Biodata Pengajar
                                    </h4>
                                </div>
                                <div class="col-12">
                                    <div class="alert alert-secondary alert-border-left alert-dismissible fade show" role="alert">
                                        <i class="ri-check-double-line me-3 align-middle fs-16"></i><strong>Informasi</strong>
                                        - Pada form berikut kamu bisa menambahkan guru yang akan di daftarkan pada aplikasi, form yang memiliki tanda bintang wajib kamu isi
                                    </div>
                                </div>

                                <div class="col-md-8">
                                    <x-form-input name="nama" wire:model.defer="nama" label="Nama Lengkap"  placeholder="Nama Lengkap" />
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="nik"  wire:model="nik" label="NIK" placeholder="352xxxxxxxxx" />
                                </div>
                                <div class="col-md-8">
                                    <x-form-input name="tempat_lahir" wire:model.defer="tempat_lahir" label="Tempat Lahir" placeholder="Masukan Tempat Lahir" />
                                </div>
                                <div class="col-md-4">
                                    <x-form-input name="tanggal_lahir" wire:model="tanggal_lahir" type="date" label="Tempat Lahir" />
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
                                    <x-form-input name="email" wire:model="email" label="Email" placeholder="Masukan Email" />
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
                                    <x-form-select name="status_guru" label="Status Guru"
                                                   wire:model.defer="status_guru">
                                        <option value="">Pilih Status</option>
                                        <option value="Guru Tetap">Guru Tetap</option>
                                        <option value="Guru Tidak Tetap">Guru Tidak Tetap</option>
                                    </x-form-select>
                                </div>

                                <div class="col-md-4">
                                    <x-form-input name="tanggal_masuk" wire:model.defer="tanggal_masuk"
                                                  label="Tahun Masuk" type="date" placeholder="Masukan Tahun Lulus"/>
                                </div>

                                <div class="col-md-12">
                                    <x-form-input name="avatar" wire:model="avatar" type="file" label="Pilih Avatar"/>
                                </div>

                                <h4 class="mt-5 fw-bold d-flex align-items-center">
                                    <i class="ri-lock-line"></i>
                                    Account Tertaut
                                </h4>

                                <div class="col-12">
                                    <div class="alert alert-secondary alert-border-left alert-dismissible fade show"
                                         role="alert">
                                        <i class="ri-check-double-line me-3 align-middle fs-16"></i><strong>Informasi</strong>
                                        - Akun berikut ini sudah otomatis terisi sesuai data yang di inputkan di data
                                        sebelumnya, kamu bisa merubah password nanti
                                        setelah data berhasil ditambahkan
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <x-form-input name="email" wire:model="email" readonly label="Email"/>
                                </div>
                                <div class="col-md-4">
                                    <x-form-input
                                        type="text"
                                        wire:model="password"
                                        name="password"
                                        label="Password"
                                        readonly
                                    />
                                    <small class="text-muted">Password akan secara default di set dari NIK</small>
                                </div>
                                <div class="col-md-4">
                                    <x-form-select wire:model="role" name="role" label="Role">
                                        <option value="">Pilih Roles Pengguna</option>
                                        @foreach($data_jabatan as $role)
                                            <option value="{{$role->name}}">{{$role->name}}</option>
                                        @endforeach
                                    </x-form-select>
                                </div>

                                <div class="form-group d-flex justify-content-between my-5">
                                    <button class="btn btn-outline-danger btn-border d-flex align-items-center gap-1">
                                        <i class="las la-undo-alt fs-18"></i>
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
                    <div class="col-md-4">
                        @if($avatar)
                            <h5>Preview Avatar</h5>
                            <img src="{{$avatar->temporaryUrl()}}" class="img-fluid img-thumbnail" alt="">
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
