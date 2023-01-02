<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="row">
        <div class="col-md-5">
            <div class="accordion border-0 bg-transparent " id="dibuatOleh">
                <div class="accordion-item border-0 bg-transparent">
                    <div class="accordion-header border-0" id="headingOne">
                        <div class="accordion-button align-items-center bg-transparent" type="button"
                             data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                             aria-controls="collapseOne">
                            <div class="d-grid ">
                                <h4>Dibuat Oleh</h4>
                                <p>{{$tagihan->pembuat->name}}
                                    Pada {{\Carbon\Carbon::parse($tagihan->created_at)->isoFormat('DD MMMM YYYY')}}</p>
                            </div>
                        </div>
                    </div>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                         data-bs-parent="#dibuatOleh">
                        <div class="accordion-body border-0">
                            <a href="#">
                                <button
                                    class="btn btn-sm waves-effect btn-warning btn-border d-flex align-items-center gap-1">
                                    <i class="ri-edit-2-line"></i>
                                    Beasiswa (Coming soon)
                                </button>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0 bg-transparent">
                    <div class="accordion-header border border-light border-bottom-dashed" id="headingTwo">
                        <div class="accordion-button align-items-center bg-transparent" type="button"
                             data-bs-toggle="collapse" data-bs-target="#terkirim" aria-expanded="false"
                             aria-controls="terkirim">
                            <div class="d-grid ">
                                <h4>Dikirimkan Pada</h4>
                                <p>Dikirimkan via Whatsapp pada 21 September 2022</p>
                            </div>
                        </div>
                    </div>
                    <div id="terkirim" class="accordion-collapse collapse show" aria-labelledby="headingTwo"
                         data-bs-parent="#terkirim">
                        <div class="accordion-body border-0">
                           @hasanyrole('Administrator')
                            <button
                                class="btn waves-effect btn-sm btn-success btn-border d-flex align-items-center gap-1">
                                <i class="ri-whatsapp-line"></i>
                                Kirim Ulang
                            </button>
                            @endhasanyrole
                        </div>
                    </div>
                </div>
                <div class="accordion-item border-0 bg-transparent">
                    <div class="accordion-header border border-light border-bottom-dashed" id="headingThree">
                        <div class="accordion-button align-items-center bg-transparent" type="button"
                             data-bs-toggle="collapse" data-bs-target="#sisaTagihan" aria-expanded="false"
                             aria-controls="sisaTagihan">
                            <div class="d-grid ">
                                <h4>Terima Pembayaran</h4>
                                <p>Sisa Tagihan Saat ini: Rp. {{rupiah($sisa_tagihan)}}</p>
                            </div>
                        </div>
                    </div>
                    <div id="sisaTagihan" class="accordion-collapse collapse show" aria-labelledby="headingThree"
                         data-bs-parent="#sisaTagihan">
                        <div class="accordion-body border-0">
                            <div class="d-flex gap-2">
                                @if($status  == 'lunas')
                                    <button class="btn btn-sm btn-success disabled">
                                        <i class="ri-check-double-fill"></i>
                                        Sudah Lunas
                                    </button>
                                @else
                                    @hasanyrole('Administrator')
                                    <a href="{{route('terima-pembayaran', $tagihan)}}">
                                        <button
                                            class="btn waves-effect btn-sm btn-success btn-border d-flex align-items-center gap-1">
                                            <i class="ri-money-euro-circle-fill"></i>
                                            Terima Pembayaran
                                        </button>
                                    </a>
                                    @endhasanyrole
                                    <a href="{{route('tagihan.bayar', Crypt::encryptString($tagihan->kode_transaksi))}}">
                                        <button
                                            class="btn waves-effect btn-sm btn-primary btn-border d-flex align-items-center gap-1">
                                            <i class="ri-paypal-line"></i>
                                            Pembayaran Online
                                        </button>
                                    </a>
                                @endif

                            </div>

                            <div class="daftar-pembayaran my-4">
                                <h5>Data Pembayaran</h5>
                                <table class="table table-sm">
                                    <thead>
                                    <tr>
                                        <th>Tgl. Pembayaran</th>
                                        <th>Method</th>
                                        <th class="text-end">Jumlah</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($pembayaran_berhasil as $pembayaran)
                                        <tr>
                                            <td>
                                                <a href="{{route('detail-pembayaran', $pembayaran->id)}}" class="fw-bold">
                                                    {{\Carbon\Carbon::parse($pembayaran->waktu_transaksi)->isoFormat('DD MMMM YYYY')}}
                                                </a>
                                            </td>
                                            <td>{{$pembayaran->jenis_pembayaran}}</td>
                                            <td class="text-end">{{rupiah($pembayaran->total)}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7">
            <div class="card py-4 px-4 shadow-none border-light">
                <div class="card-body">
                    <div class="row align-items-md-start justify-content-between">
                        <div class="col-md-6">
                            <h3>SMP Sunan Drajat</h3>
                            <small class="text-muted">Jl. Raya Sugio - Lamongan No.16, Sugio, Kec. Sugio, Kabupaten
                                Lamongan, Jawa Timur 62256</small>
                        </div>
                        <div class="col-md-6 text-end">
                            <div class="btn-group">
                                <button type="button"
                                        class="btn btn-link text-muted p-1 mt-n2 py-0 text-decoration-none fs-15"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="ri-more-2-fill"></i>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Print</a></li>
                                    <li><a class="dropdown-item" href="#">Download PDF</a></li>
                                    <li><a class="dropdown-item" href="#">Kirim Ke Whatsapp</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Batal</a></li>
                                    <li><a class="dropdown-item text-danger" href="#">Hapus</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="px-0 mx-0 my-4">
                        <div class="garis px-0 mx-0 bg-success" style="min-height: 20px"></div>
                    </div>
                    <h3>INVOICE</h3>
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-6">
                                <p class="text-muted m-0">Invoice No.</p>
                                <p class="text-muted m-0">Invoice Date</p>
                                <p class="text-muted m-0">Due Date</p>
                                <p class="text-muted m-0">Status</p>
                            </div>
                            <div class="col-md-6">
                                <p class="text-muted m-0">: {{$tagihan->kode_tagihan}}</p>
                                <p class="text-muted m-0">: {{Carbon\Carbon::parse($tagihan->tgl_dibuat)->isoFormat('DD MMM YYYY')}}</p>
                                <p class="text-muted m-0">: {{Carbon\Carbon::parse($tagihan->tgl_jatuh_tempo)->isoFormat('DD MMM YYYY')}}</p>
                                <p class="text-muted m-0">:
                                    @if($status == 'sebagian')
                                        <span class="badge badge-outline-info">
                                            {{Str::title($status)}}
                                        </span>
                                    @elseif($status == 'lunas')
                                        <span class="badge badge-outline-success">
                                            {{Str::title($status)}}
                                        </span>
                                    @elseif($status == 'belum dibayar')
                                        <span class="badge badge-outline-warning">
                                            {{Str::title($status)}}
                                        </span>
                                    @elseif($status == 'jatuh tempo')
                                        <span class="badge badge-outline-danger">
                                            {{Str::title($status)}}
                                        </span>
                                    @else
                                        <span class="badge badge-outline-danger">
                                            {{Str::title($status)}}
                                        </span>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                    <table class="table my-3">
                        <thead class="bg-soft-light">
                        <tr>
                            <th>Item</th>
                            <th>Bulan</th>
                            <th class="text-end">Jumlah</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>{{$tagihan->kategori->nama_kategori}}</td>
                            <td>{{\Carbon\Carbon::parse($tagihan->tgl_dibuat)->isoFormat('MMMM')}}</td>
                            <td class="text-end">{{rupiah($tagihan->total_tagihan)}}</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="total-tagihan d-flex align-items-center justify-content-end gap-2">
                        <h5 class="text-dark">Total:</h5>
                        <h5 class="text-dark text-end">{{rupiah($tagihan->total_tagihan)}}</h5>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="text-muted m-0">Bank</p>
                                    <p class="text-muted m-0">No. Rekening</p>
                                    <p class="text-muted m-0">Atas Nama</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="text-muted m-0">: BRI</p>
                                    <p class="text-muted m-0">: 1234567890</p>
                                    <p class="text-muted m-0">: SMP Sunan Drajat</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

