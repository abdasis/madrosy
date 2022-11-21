<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                <i class="ri-user-6-line"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 overflow-hidden ms-3">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Data Guru</p>
                            <div class="d-flex align-items-center mb-3">
                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{$data_guru->count()}}">{{$data_guru->count()}} </span> Guru</h4>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                <i class="mdi mdi-school-outline"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 overflow-hidden ms-3">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Data Siswa</p>
                            <div class="d-flex align-items-center mb-3">
                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{$data_siswa->count()}}">{{$data_siswa->count()}}</span> Siswa</h4>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-animate">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-soft-primary text-primary rounded-2 fs-2">
                                <i class="mdi mdi-door-sliding-open"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 overflow-hidden ms-3">
                            <p class="text-uppercase fw-medium text-muted text-truncate mb-3">Data Kelas</p>
                            <div class="d-flex align-items-center mb-3">
                                <h4 class="fs-4 flex-grow-1 mb-0"><span class="counter-value" data-target="{{$data_kelas->count()}}">{{$data_kelas->count()}}</span> Ruangan</h4>
                            </div>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <div class="card rounded">
                <h5 class="card-header border-bottom border-light">
                    Data Absensi Terbaru
                </h5>
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
