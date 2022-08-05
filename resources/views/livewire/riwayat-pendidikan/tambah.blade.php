<div>
    {{-- Stop trying to control. --}}
    <div class="card p-3">
        <div class="card-body">
            <h4 class="card-title mb-5">
                <i class="mdi mdi-school"></i>
                Tambah Riwayat Pendidikan Pengajar
            </h4>
            <div class="row">
                <div class="col-md-6">
                    <form wire:submit.prevent="simpan">
                        <div class="row align-items-center gy-4">
                            <div class="col-md-3">
                                <label for="">Nama Guru</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <x-form-select name="guru_id" wire:model.defer="guru_id">
                                        <option value="">Pilih Guru</option>
                                        @foreach($semua_guru  as $guru)
                                            <option value="{{$guru->id}}">{{$guru->nama}}</option>
                                        @endforeach
                                    </x-form-select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="">Jenjang Pendidikan</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <x-form-select name="jenjang_pendidikan" wire:model="jenjang_pendidikan">
                                        <option value="">Pilih Jenjang Pendidikan</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                        <option value="D1">D1</option>
                                        <option value="D2">D2</option>
                                        <option value="D3">D3</option>
                                    </x-form-select>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="">Nama Sekolah</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group">
                                    <x-form-input placeholder="Masukan Nama Sekolah" name="nama_sekolah" wire:model.defer="nama_sekolah" />
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="">Alamat Sekolah</label>
                            </div>
                            <div class="col-md-9">
                                <x-form-textarea placeholder="Masukan Alamat Sekolah" name="alamat_sekolah" wire:model.defer="alamat_sekolah"/>
                            </div>


                            <div class="col-md-3">
                                <label for="">Tahun Masuk</label>
                            </div>
                            <div class="col-md-9">
                                <div class="form-group"  wire:ignore.self>
                                    <x-form-input
                                        placeholder="Pilih Tanggal Masuk"
                                        name="tahun_lulus"
                                        wire:model.defer="tahun_masuk"
                                        type="text"
                                        class="form-control flatpickr-input"
                                        data-provider="flatpickr"
                                        data-date-format="d F, Y"
                                        readonly="readonly"
                                        id="tahun_masuk"
                                    />
                                </div>
                            </div>


                            <div class="col-md-3">
                                <label for="">Tahun Lulus</label>
                            </div>
                            <div class="col-md-9" >
                                <div class="form-group" wire:ignore.self>
                                    <x-form-input
                                        placeholder="Pilih Tanggal Lulus"
                                        name="tahun_lulus"
                                        wire:model.defer="tahun_lulus"
                                        type="text"
                                        class="form-control flatpickr-input active"
                                        data-provider="flatpickr"
                                        data-date-format="d F, Y"
                                        readonly="readonly"
                                        id="tahun_lulus"
                                    />
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="">Jurusan</label>
                            </div>
                            <div class="col-md-9">
                                <x-form-input name="jurusan" placeholder="Masukan Juruasan" wire:model.defer="jurusan" />
                            </div>
                        </div>

                        <div class="d-flex justify-content-end mt-3">
                            <button class="btn btn-success btn-border gap-1 d-flex align-items-center">
                                <i class="ri-save-line"></i>
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        $('#tahun_masuk').on('change', function (event){
            @this.set('tahun_masuk', event.target.value);
        })

        $('#tahun_lulus').on('change', function (event){
            @this.set('tahun_lulus', event.target.value);
        })
    </script>

@endpush
