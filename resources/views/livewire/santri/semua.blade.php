<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card bg-pattern">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                <i class="ri-user-2-line align-middle"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">Siswa Putra</p>
                            <h4 class=" mb-0"><span class="counter-value" data-target="{{$total_putra}}">{{$total_putra}}</span></h4>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-pattern">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                <i class="ri-user-2-line align-middle"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">Siswa Putri</p>
                            <h4 class=" mb-0"><span class="counter-value" data-target="{{$total_putri}}">{{$total_putri}}</span></h4>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div>
        <div class="col-md-4">
            <div class="card bg-pattern">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div class="avatar-sm flex-shrink-0">
                            <span class="avatar-title bg-light text-primary rounded-circle fs-3">
                                <i class="ri-user-2-line align-middle"></i>
                            </span>
                        </div>
                        <div class="flex-grow-1 ms-3">
                            <p class="text-uppercase fw-semibold fs-12 text-muted mb-1">Total Santri</p>
                            <h4 class=" mb-0"><span class="counter-value" data-target="{{$total_santri}}">{{$total_santri}}</span></h4>
                        </div>
                    </div>
                </div><!-- end card body -->
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <livewire:santri.tabel/>
        </div>
    </div>
</div>
