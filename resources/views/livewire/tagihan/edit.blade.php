<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="card border-light rounded-3">
        <div class="card-header border-bottom border-light">
            <h5 class="mb-0 d-flex align-items-center gap-1">
                <i class="ri-edit-line"></i>
                Edit Data Tagihan
            </h5>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <form wire:submit.prevent="simpan">
                        <div class="form-group d-flex align-items-center mb-3">
                            <label for="" class="col-3">Nama Siswa</label>
                            <div class="inner-select col">
                                <x-form-select name="santri_id" wire:model="santri_id" id="">
                                    <option value="">Pilih Siswa</option>
                                    @foreach($data_siswa as $siswa)
                                        <option value="{{$siswa->id}}">{{$siswa->nama_lengkap}}</option>
                                    @endforeach
                                </x-form-select>
                            </div>
                        </div>

                        <div class="form-group d-flex align-items-center mb-3">
                            <label for="" class="col-3">Kategori Tagihan</label>
                            <div class="inner-form col">
                                <x-form-select disabled name="kategori_tagihan_id" wire:model="kategori_tagihan_id">
                                    <option value="">Pilih Kategori</option>
                                    @foreach($data_kategori_tagihan as $kategori_tagihan)
                                        <option
                                            value="{{$kategori_tagihan->id}}">{{$kategori_tagihan->nama_kategori}}</option>
                                    @endforeach
                                </x-form-select>
                            </div>
                        </div>

                        <div class="form-group d-flex align-items-center mb-3">
                            <label for="" class="col-3">Kode Tagihan</label>
                            <div class="inner-form col">
                                <x-form-input disabled name="kode_tagihan" wire:model="kode_tagihan"/>
                            </div>
                        </div>

                        <div class="form-group d-flex align-items-center mb-3">
                            <label for="" class="col-3">Tgl. Dibuat</label>
                            <div class="inner-form col">
                                <x-form-input name="tgl_dibuat" wire:model="tgl_dibuat" type="date"/>
                            </div>
                        </div>

                        <div class="form-group d-flex align-items-center mb-3">
                            <label for="" class="col-3">Tgl. Jatuh Tempo</label>
                            <div class="inner-form col">
                                <x-form-input type="date" name="tgl_jatuh_tempo" wire:model="tgl_jatuh_tempo"/>
                            </div>
                        </div>

                        <div class="form-grup d-flex align-items-center mb-3">
                            <label for="" class="col-3">Total Tagihan</label>
                            <div class="inner-form col">
                                <x-form-input name="total_tagihan" wire:model="total_tagihan"
                                              placeholder="Masukan total Tagihan"/>
                            </div>
                        </div>

                        <div class="form-group d-flex align-items-center mb-3">
                            <label for="" class="col-3">Keterangan</label>
                            <div class="inner-form col">
                                <x-form-textarea name="keterangan" wire:model="keterangan"
                                                 placeholder="Masukan keterangan"></x-form-textarea>
                            </div>
                        </div>

                        <button class="btn btn-primary rounded-3 d-flex align-items-center float-end mt-3">
                            <i class="ri-save-line me-1 fs-14"></i>
                            Perbarui
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
