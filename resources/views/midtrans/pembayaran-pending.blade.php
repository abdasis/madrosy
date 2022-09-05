<x-guest-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 80vh">
            <div class="col-md-8">
                <div class="card border-light shadow-sm">
                    <div class="card-body text-center">
                        <i class="ri-checkbox-circle-line icon-success text-success py-0 my-0" style="font-size: 100px"></i>
                        <h3 class="">Pembayaran di Proses</h3>
                        <small class="text-muted">Tunggu sebentar kami akan informasikan lagi setelah pembayaran berhasil</small>
                    </div>
                    <div class="card-body">
                        <h5>Informasi</h5>
                        <div class="d-flex justify-content-between">
                            <div class="text-muted">Tgl. Pembayaran</div>
                            <div class="text-muted">{{\Carbon\Carbon::parse($transaksi->waktu_transaksi)->format('d F, Y')}}</div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="text-muted">Metode Pembayaran</div>
                            <div class="text-muted">{{$transaksi->jenis_pembayaran}}</div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="text-muted">Total Pembayaran</div>
                            <div class="text-muted">Rp.</div>
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
