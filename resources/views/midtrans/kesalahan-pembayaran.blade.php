<x-guest-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh">
            <div class="col-md-5">
                <div class="card border-light shadow-sm">
                    <div class="card-body text-center">
                        <lord-icon
                            src="https://cdn.lordicon.com/nrzqxhfu.json"
                            trigger="hover"
                            colors="primary:#16c79e,secondary:#d1faf0"
                            style="width:150px;height:150px">
                        </lord-icon>
                        <h3 class="">Informasi Pembayaran</h3>
                        <small class="text-muted">Kamu sudah menentukan pembayaran, berikut informasi pembayaran yang kamu gunakan</small>
                    </div>
                    <div class="card-body">
                        <h5>Informasi</h5>
                        <div class="d-flex justify-content-between py-2 border-bottom border-light">
                            <div class="text-muted">Tgl. Pembayaran</div>
                            <div class="text-muted">{{\Carbon\Carbon::parse($transaksi->waktu_transaksi)->format('d F, Y')}}</div>
                        </div>
                        <div class="d-flex justify-content-between py-2 border-bottom border-light">
                            <div class="text-muted">Metode Pembayaran</div>
                            <div class="text-muted">{{$transaksi->jenis_pembayaran}}</div>
                        </div>
                        <div class="d-flex justify-content-between py-2 border-bottom border-light">
                            <div class="text-muted">Total Pembayaran</div>
                            <div class="text-muted">Rp. {{rupiah($transaksi->total)}}</div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="d-grid">
                            <button class="btn btn-dark btn-border">
                                Panduan Pembayaran
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>

@push('styles')
    <style>
        .icon-success{
            color: #4caf50;
            text-align: center;
        }
    </style>
@endpush

