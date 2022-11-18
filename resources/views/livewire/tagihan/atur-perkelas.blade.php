<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <div class="row justify-content-lg-between">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header border-0">
                    <h1 class="card-title">Pengaturan Tagihan</h1>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="simpan">
                        <div class="form-group mb-3">
                            <x-form-select label="Pilih Kelas" name="kelas" wire:model="kelas">
                                <option value="">Pilih Kelas</option>
                                @foreach($data_kelas as $kelas)
                                    <option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
                                @endforeach
                            </x-form-select>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-select name="kategori_id" wire:model="kategori_id" label="Kategori">
                                <option value="">Pilih Kategori</option>
                                @foreach($data_kategori_tagihan as $kategori_tagihan)
                                    <option value="{{$kategori_tagihan->id}}">{{$kategori_tagihan->nama_kategori}}</option>
                                @endforeach
                            </x-form-select>
                        </div>
                        {{--<div class="form-group mb-3">
                            <x-form-select name="tahun_ajaran" wire:model="tahun_ajaran" label="Tahun Ajaran">
                                <option value="">Pilih Tahun Ajaran</option>
                                @foreach($data_tahun_ajaran as $tahun_ajaran)
                                    <option value="{{$tahun_ajaran->id}}">{{$tahun_ajaran->tahun_awal}}/{{$tahun_ajaran->tahun_akhir}}</option>
                                @endforeach
                            </x-form-select>
                        </div>--}}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <x-form-input type="date" name="tgl_tagihan" wire:model="tgl_tagihan" label="Tanggal Tagihan" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-2">
                                    <x-form-input type="date" name="tgl_jatuh_tempo" wire:model="tgl_jatuh_tempo" label="Tgl. Terakhir Pembayaran" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-3" wire:ignore>
                            <x-form-input name="jumlah" class="text-end" id="jumlah" placeholder="Rp. 80.000" label="Jumlah Tagihan"/>
                        </div>
                        <div class="form-gorup mb-3">
                            <x-form-textarea name="notes" wire:model="notes" label="Notes"/>
                        </div>
                        <div class="d-flex justify-content-between align-items-center">
                            <a href="{{route('kategori-tagihan.semua')}}">
                                <button type="button" class="btn btn-light btn-border d-flex align-items-center gap-1 waves-effect">
                                    <i class="ri-arrow-go-back-line fs-16"></i>
                                    Kembali
                                </button>
                            </a>
                            <button class="btn btn-success btn-border d-flex align-items-center gap-1" >
                                <i class="ri-save-line fs-16"></i>
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-5">
            @if(count($data_santri) > 0)
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title mb-0">
                            Informasi Siswa
                        </h5>
                        <div class="card-body">
                            <div class="alert alert-info">
                                Semua kelas yang tercantum pada tabel ini akan dibuatkan sebuah tagian sesuai dengan
                                tagihan yang sudah di tentukan pada form tagihan
                            </div>
                            <table class="table table-sm table-hover ">
                                <thead>
                                <tr>
                                    <th>Nama</th>
                                    <th>NISN</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($data_santri as $santri)
                                    <tr>
                                        <td>{{$santri->nama_lengkap}}</td>
                                        <td>{{$santri->nisn}}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <strong>Total: {{$data_santri->count()}} Santri</strong>
                        </div>
                    </div>
                </div>
            @endif
        </div>
    </div>
</div>

@push('scripts')
    <script>
        var jumlah = document.getElementById('jumlah')
        jumlah.addEventListener('keyup', (event) => {
            rupiah(jumlah)
            @this.set('jumlah', rupiah(jumlah))
        })
    </script>
@endpush
