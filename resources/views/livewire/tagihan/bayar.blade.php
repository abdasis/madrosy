<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 90vh">
            <div class="col-md-6">
                <div class="card border-light shadow-sm">
                    <div class="card-header d-flex align-items-center border-light border-bottom-dashed">
                        <h5 class="card-title mb-0 flex-grow-1">Pembayaran Tagihan</h5>
                        <h5 class="text-success">
                            Batal
                        </h5>
                    </div>
                    <div class="card-body">
                        <div class="alert alert-warning">
                            <h5 class="alert-heading">Perhatian!</h5>
                            <p class="mb-0">Berikut detail pembayaran yang harus dibayar</p>
                        </div>
                        <div class="d-flex gap-2 align-items-center my-2">
                            <h5 class="mb-0">Invoice</h5>
                            <span> #{{$tagihan->kode_tagihan}}</span>
                        </div>
                        <div class="bg-light p-2 rounded-3">
                            <table class="table table-borderless mx-0 px-0">
                                <tr class="mx-0 px-0">
                                    <td>{{$tagihan->kategori->nama_kategori}}</td>
                                    <td>{{$tagihan->kategori->tapel->tahun_awal}}/{{$tagihan->kategori->tapel->tahun_akhir}}</td>
                                    <td class="text-end">{{rupiah($tagihan->total_tagihan)}}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="my-3 d-grid">
                            <button wire:click.prevent="$emit('pay', {{$tagihan->transaksi}})" class="btn btn-success btn-border">
                                Bayar Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
    <script type="text/javascript"
            src="https://app.sandbox.midtrans.com/snap/snap.js"
            data-client-key="{{config('midtrans.client_key')}}">
    </script>

    <script type="text/javascript">
        Livewire.on('pay', (data) => {
            window.snap.pay(data.token);
        })
    </script>
@endpush
