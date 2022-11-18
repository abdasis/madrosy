<div>
    {{-- Do your work, then step back. --}}
    <div class="row">
        <div class="col-md-6">
            <div class="card rounded border-light">
                <div class="card-header border-bottom border-light">
                    <h5 class="mb-0">Detail Tagihan Siswa</h5>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <td>Nama Siswa</td>
                            <td>:</td>
                            <td>{{$tagihan->santri->nama_lengkap}}</td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td>:</td>
                            <td>{{$tagihan->santri->nisn}}</td>
                        </tr>
                        <tr>
                            <td>Kode Tagihan</td>
                            <td>:</td>
                            <td>{{$tagihan->kode_tagihan}}</td>
                        </tr>
                        <tr>
                            <td>Jenis Tagihan</td>
                            <td>:</td>
                            <td>{{$tagihan->kategori->nama_kategori}}</td>
                        </tr>
                        <tr>
                            <td>Tanggal Ditagihkan</td>
                            <td>:</td>
                            <td>{{\Carbon\Carbon::parse($tagihan->tgl_dibuat)->isoFormat('DD MMMM YYYY')}}</td>
                        </tr>
                        <tr>
                            <td>Batas Pembayaran</td>
                            <td>:</td>
                            <td>{{\Carbon\Carbon::parse($tagihan->tgl_jatuh_tempo)->isoFormat('DD MMMM YYYY')}}</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>:</td>
                            <td>Rp. {{rupiah($tagihan->total_tagihan)}}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>
                                @if($tagihan->sisa_tagihan == 'lunas')
                                    <span class="badge badge-outline-success">{{$tagihan->sisa_tagihan}}</span>
                                @elseif($tagihan->sisa_tagihan == 'belum dibayar')
                                    <span class="badge badge-outline-warning">{{$tagihan->sisa_tagihan}}</span>
                                @else
                                    <span class="badge badge-soutline-danger">{{$tagihan->sisa_tagihan}}</span>
                                @endif
                            </td>
                        </tr>

                        <tr>
                            <td>Keterangan</td>
                            <td>:</td>
                            <td>{{$tagihan->keterangan}}</td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card rounded-3">
                <div class="card-header border-bottom border-light">
                    <h5>Form Terima Pembayaran</h5>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="simpan">
                        <div class="form-group mb-2" wire:ignore>
                            <x-form-input
                                type="date" name="tanggal_pembayaran"
                                wire:model="tanggal_pembayaran"
                                label="Tanggal Pembayaran"
                            />
                        </div>

                        <div class="form-group mb-2">
                            <x-form-select name="metode_pembayaran" wire:model="metode_pembayaran"
                                           label="Metode Pembayaran">
                                <option value="">Pilih Metode Pembayaran</option>
                                <option value="Tunai">Tunai</option>
                            </x-form-select>
                        </div>

                        <div class="form-group mb-2" wire:ignore>
                            <x-form-input
                                class="text-end"
                                name=""
                                label="Jumlah Pembayaran"
                                id="total_pembayaran"
                            />
                        </div>

                        <div class="form-group mb-2">
                            <x-form-textarea name="keterangan" wire:model.defer="keterangan"
                                             label="Keterangan Pembayaran"></x-form-textarea>
                        </div>
                        <div class="form-group mb-2">
                            <button class="btn btn-primary float-end rounded">
                                <i class="ri-save-line"></i>
                                Simpan
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card rounded border-light">
                <div class="card-header border-bottom border-light">
                    <h5 class="mb-0">
                        <i class="ri-calculator-fill"></i>
                        Kalkulator Kembalian
                    </h5>
                </div>
                <div class="card-body">
                    <div class="form-group mb-2">
                        <x-form-input name="jumlah_uang_diterima" wire:model="jumlah_uang_diterima"
                                      label="Jumlah Uang Diterima"/>
                    </div>
                    <div class="form-group mb-2">
                        <x-form-input name="total_pembayaran" wire:model="total_pembayaran" label="Total Pembayaran"
                                      readonly/>
                    </div>
                    <div class="form-group mb-2">
                        <x-form-input name="total_kembalin" wire:model="total_kembali" label="Total Kembali" readonly/>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script>
        var total_pembayaran = document.getElementById('total_pembayaran');
        total_pembayaran.addEventListener('keyup', (event) => {
            rupiah(total_pembayaran)
            @this.set('total_pembayaran', rupiah(total_pembayaran));
        })

        Livewire.onLoad(() => {
            total_pembayaran.value = modelRupiah(@this.total_pembayaran);
        })
    </script>
@endpush
