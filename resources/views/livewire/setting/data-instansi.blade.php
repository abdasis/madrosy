<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header border-bottom border-light">
                    <h5 class="mb-0">
                        Pengaturan Data Instansi
                    </h5>
                </div>
                <div class="card-body bg-soft-light py-4">
                    <div class="widget-title my-3">
                        <h5 class="text-success fw-bold align-items-center d-flex gap-2">
                            <i class="ri-home-5-line"></i>
                            Tentang Sekolah
                        </h5>
                        <p class="text-muted">
                            Kamu bisa mengubah nama instansi, dan status pada halaman ini.
                        </p>
                    </div>
                    <div class="form-group my-2">
                        <x-form-input
                            name="nama_sekolah"
                            wire:model="nama_sekolah"
                            placeholder="Masukan nama sekolah"
                            label="Nama Sekolah"
                        />
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group my-2">
                                <x-form-input
                                    name="no_statistik"
                                    label="Nomor Statistik"
                                    placeholder="Masukan No. Statistik"
                                    wire:model="no_statistik"
                                />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group my-2">
                                <x-form-input
                                    name="no_sk"
                                    label="Nomor Surat Keputusan"
                                    placeholder="Masukan No. SK"
                                    wire:model="no_sk"
                                />
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group my-2">
                                <x-form-input
                                    name="tanggal_sk"
                                    label="Tanggal Surat Keputusan"
                                    type="date"
                                    placeholder="Masukan No. SK"
                                    wire:model="tanggal_sk"
                                />
                            </div>
                        </div>
                    </div>
                    <div class="widget-title my-3">
                        <h5 class="text-success fw-bold align-items-center d-flex gap-2">
                            <i class="ri-map-line"></i>
                            Alamat
                        </h5>
                        <p class="text-muted">
                            Masukan alamat lengkap dari sekolah yang sedang kamu kelola
                        </p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group my-2">
                                    <x-form-select name="provinsi" wire:model="provinsi" label="Provinsi">
                                        <option value="">Pilih Provinsi</option>
                                        @foreach($data_provinsi as $provinsi)
                                            <option value="{{$provinsi->code}}">{{$provinsi->name}}</option>
                                        @endforeach
                                    </x-form-select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group my-2">
                                    <x-form-select name="provinsi" label="Provinsi">
                                        <option value="">Pilih Provinsi</option>
                                        @foreach($data_kabupaten as $kabupaten)
                                            <option value="{{$kabupaten->code}}">{{$kabupaten->name}}</option>
                                        @endforeach
                                    </x-form-select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group my-2">
                                    <x-form-input
                                        name="tanggal_sk"
                                        label="Tanggal Surat Keputusan"
                                        type="date"
                                        placeholder="Masukan No. SK"
                                        wire:model="tanggal_sk"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
