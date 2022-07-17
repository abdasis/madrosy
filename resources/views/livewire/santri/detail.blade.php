<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="row">
        <div class="col-md-3">
            <div class="card ribbon-box ribbon-fill ribbon-sm">
                <div class="card-header border-bottom-dashed">
                    <div class="ribbon ribbon-success"><i class="ri-checkbox-circle-fill"></i></div>
                    <a class="d-flex align-items-center" data-bs-toggle="collapse" href="#contactInitiated1" role="button" aria-expanded="false" aria-controls="contactInitiated1">
                        <div class="flex-shrink-0">
{{--                            <img src="assets/images/users/avatar-5.jpg" alt="" class="avatar-xs rounded-circle">--}}
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <h6 class="fs-14 mb-1">{{$santri->nama_lengkap}} @if($santri->nama_panggilan)({{$santri->nama_panggilan}})@endif</h6>
                            <p class="text-muted mb-0">{{$santri->nisn}}</p>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <div class="biodata-singkat">
                        <ul class="list-unstyled vstack gap-2 mb-0">
                            <li>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 avatar-xxs text-muted">
                                        <i class="ri-heart-3-line"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Umur</h6>
                                        <small class="text-muted">{{\Carbon\Carbon::parse($santri->tanggal_lahir)->diffInYears(now())}} thn</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 avatar-xxs text-muted">
                                        <i class="ri-phone-line"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Telepon</h6>
                                        <small class="text-muted">{{$santri->no_hp}}</small>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex">
                                    <div class="flex-shrink-0 avatar-xxs text-muted">
                                        <i class="ri-mail-line"></i>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-0">Email</h6>
                                        <small class="text-muted">{{$santri->email}}</small>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header border-0">
                    <h5 class="card-title">Biodata Santri</h5>
                </div>
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col">
                            <ul class="nav nav-tabs-custom card-header-tabs border-bottom-0" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold active" data-bs-toggle="tab" href="#productnav-all" role="tab" aria-selected="true">
                                        Bidata Santri
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-published" role="tab" aria-selected="false">
                                        Biodata Orang Tua
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link fw-semibold" data-bs-toggle="tab" href="#productnav-draft" role="tab" aria-selected="false">
                                        Total Transaksi  <span class="badge badge-soft-danger align-middle rounded-pill ms-1">12</span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-auto">
                            <div id="selection-element" style="display: none;">
                                <div class="my-n1 d-flex align-items-center text-muted">
                                    Select <div id="select-content" class="text-body fw-semibold px-1"></div> Result <button type="button" class="btn btn-link link-danger p-0 ms-3" data-bs-toggle="modal" data-bs-target="#removeItemModal">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="tab-content text-muted">
                        <div class="tab-pane active" id="productnav-all" role="tabpanel">
                            <table class="table table-borderless">
                                <tr>
                                    <td>Nama Lengkap</td>
                                    <td>:</td>
                                    <td>{{$santri->nama_lengkap}}</td>
                                </tr>
                                <tr>
                                    <td>Nama Panggilan</td>
                                    <td>:</td>
                                    <td>{{$santri->nama_panggilan ?? '-'}}</td>
                                </tr>
                                <tr>
                                    <td>NISN</td>
                                    <td>:</td>
                                    <td>{{$santri->nisn}}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>{{$santri->jenis_kelamin}}</td>
                                </tr>
                                <tr>
                                    <td>TTL</td>
                                    <td>:</td>
                                    <td>{{$santri->tempat_lahir}}, {{\Carbon\Carbon::parse($santri->tanggal_lahir)->format('d F Y')}}</td>
                                </tr>
                                <tr>
                                    <td>Agama</td>
                                    <td>:</td>
                                    <td>{{$santri->agama}}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{$santri->alamat}}</td>
                                </tr>
                            </table>
                        </div>
                        <!-- end tab pane -->

                        <div class="tab-pane" id="productnav-published" role="tabpanel">
                            <div class="py-4 text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px">
                                </lord-icon>
                                <h5 class="mt-4">Belum Ada Data Orang Tua yang Ditambahkan</h5>
                            </div>
                        </div>
                        <!-- end tab pane -->

                        <div class="tab-pane" id="productnav-draft" role="tabpanel">
                            <div class="py-4 text-center">
                                <lord-icon src="https://cdn.lordicon.com/msoeawqm.json" trigger="loop" colors="primary:#405189,secondary:#0ab39c" style="width:72px;height:72px">
                                </lord-icon>
                                <h5 class="mt-4">Sorry! No Result Found</h5>
                            </div>
                        </div>
                        <!-- end tab pane -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
