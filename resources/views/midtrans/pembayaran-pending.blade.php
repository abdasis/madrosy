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
                        <h3 class="">Pembayaran Dalam Proses</h3>
                        <small class="text-muted">Silahkan lakukan pembayaran sesuai Metode yang dipilih, Jika sudah melakukan pembayaran silahkan cek statusnya dengan cara klik tombol <strong>Cek Status</strong></small>
                    </div>
                    <div class="card-body">
                        <h5>Informasi</h5>
                        <div class="d-flex justify-content-between py-2 border-bottom border-light">
                            <div class="text-muted">Tgl. Pembayaran</div>
                            <div class="text-muted">{{\Carbon\Carbon::parse($transaksi->waktu_transaksi)->format('d M, Y H:i')}}</div>
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
                        @if($transaksi->status_transaksi != 'settlement')
                            <a href="{{route('tagihan.bayar', ['kode' => $transaksi->order_id])}}">
                            <span class="d-grid">
                                <button id="btnPay" class="btn btn-info btn-border mb-2">
                                    Baya Sekarang
                                </button>
                            </span>
                            </a>
                            <a href="{{route('midtrans.status', ['order_id' => $transaksi->order_id])}}">
                                <span class="d-grid">
                                    <button id="btnPay" class="btn btn-dark">
                                        Cek Status
                                    </button>
                                </span>
                            </a>
                        @else
                            <div class="d-grid">
                                <button id="btnPay" class="btn btn-success disabled">
                                    Pembayaran Kamu Sudah Lunas
                                </button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript"
            src="{{config('midtrans.midtrans_snap_url')}}"
            data-client-key="{{config('midtrans.client_key')}}">
    </script>

    <script>
        let btnPay = document.getElementById('btnPay');
        btnPay.addEventListener('click', function () {
            window.snap.pay("{{$transaksi->token}}");
        });
    </script>
</x-guest-layout>


<div class="form-group">
    <label for=""></label>
    <input type="text" onChange={handleChange} value={this.state.nama_lengkap}>
</div>
