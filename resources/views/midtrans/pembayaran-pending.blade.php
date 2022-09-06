<x-guest-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 100vh">
            <div class="col-md-5">
                <div class="card border-light shadow-sm">
                    <div class="card-body text-center">
                        <lord-icon
                            src="https://cdn.lordicon.com/osvvqecf.json"
                            trigger="hover"
                            style="width:100px;height:100px">
                        </lord-icon>
                        <h3 class="">Pembayaran di Proses</h3>
                        <small class="text-muted">Tunggu sebentar kami akan informasikan lagi setelah pembayaran berhasil</small>
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
                        <div class="d-grid gap-2">
                            <a href="{{route('midtrans.ganti', ['id' => $transaksi->transaksi_id])}}"></a>
                            <button id="btnPay" class="btn btn-dark">
                                Bayar Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript"
            src="{{config('midtrans.midtrans_url')}}"
            data-client-key="{{config('midtrans.client_key')}}">
    </script>

    <script>
        let btnPay = document.getElementById('btnPay');
        btnPay.addEventListener('click', function () {
            window.snap.pay("{{$transaksi->token}}");
        });
    </script>
</x-guest-layout>
