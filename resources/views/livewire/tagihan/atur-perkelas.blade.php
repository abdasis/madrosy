<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header border-0">
                    <h1 class="card-title">Pengaturan Tagihan</h1>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="simpan">
                        <div class="form-group mb-3">
                            <x-form-select label="Pilih Kelas" name="kelas">
                                <option value="">Pilih Kelas</option>
                                @foreach($data_kelas as $kelas)
                                    <option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
                                @endforeach
                            </x-form-select>
                        </div>

                        <div class="form-group mb-3">
                            <x-form-select name="tahun_ajaran" wire:model="tahun_ajaran" label="Tahun Ajaran">
                                <option value="">Pilih Tahun Ajaran</option>
                                @foreach($data_tahun_ajaran as $tahun_ajaran)
                                    <option value="{{$tahun_ajaran->id}}">{{$tahun_ajaran->tahun_awal}}/{{$tahun_ajaran->tahun_akhir}}</option>
                                @endforeach
                            </x-form-select>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-input name="jumlah" wire:model="jumlah" placeholder="Masukan jumlah tagihan" label="Jumlah Tagihan"/>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{route('kategori-tagihan.semua')}}">
                                <button type="button" class="btn btn-light btn-border d-flex align-items-center gap-1 waves-effect">
                                    <i class="ri-arrow-go-back-line fs-16"></i>
                                    Kembali
                                </button>
                            </a>
                            <button class="btn btn-success btn-border d-flex align-items-center gap-1">
                                <i class="ri-save-line fs-16"></i>
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
