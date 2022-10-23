<div>
    {{-- Stop trying to control. --}}
    @if($jadual)
        <div class="row">
            <div class="col-md-5">
                <div class="card overflow-hidden">
                    <div class="card-body bg-pattern d-flex">
                        <div class="flex-grow-1">
                            <h4 class="fs-18 lh-base mb-0">
                                Hallo, {{auth()->user()->name}}
                            </h4>
                            <p class="mb-0 mt-2 pt-1 text-muted">
                                Selamat datang di ruang kelas <strong>{{$jadual->kelas->nama_kelas}}</strong> jangan
                                lupa melakukan absensi terlebih dahulu sebelum memulai pelajaran hari ini
                            </p>
                        </div>
                        <img src="assets/images/bg-d.png" alt="" class="img-fluid">
                    </div>
                </div>

            </div>
            <div class="col-md-7">
                <div class="card crm-widget">
                    <div class="card-body p-0">
                        <div class="row row-cols-md-3 row-cols-1">
                            <div class="col col-lg border-end">
                                <div class="py-4 px-3">
                                    <h5 class="text-muted text-uppercase fs-13">Total Siswa</i>
                                    </h5>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="ri-group-line display-6 text-muted"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h2 class="mb-0"><span class="counter-value" data-target="{{$jadual->kelas->santri->count()}}">{{$jadual->kelas->santri->count()}}</span></h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col col-lg border-end">
                                <div class="mt-3 mt-md-0 py-4 px-3">
                                    <h5 class="text-muted text-uppercase fs-13">Jadwal Hari Ini</h5>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="ri-book-2-line display-6 text-muted"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h2 class="mb-0">{{$jadual->mapel->nama}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                            <div class="col col-lg border-end">
                                <div class="mt-3 mt-md-0 py-4 px-3">
                                    <h5 class="text-muted text-uppercase fs-13">
                                        Kelas
                                    </h5>
                                    <div class="d-flex align-items-center">
                                        <div class="flex-shrink-0">
                                            <i class="ri-door-open-line display-6 text-muted"></i>
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h2 class="mb-0">{{$jadual->kelas->nama_kelas}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- end col -->
                        </div><!-- end row -->
                    </div><!-- end card body -->
                </div>
            </div>
        </div>
        <div class="card border-light rounded">
            <div class="card-header border-bottom border-light">
                <h5 class="card-title mb-0">Siswa di Kelas ini</h5>
            </div>
            <div class="card-body bg-soft-light">
                <div class="d-none d-md-flex d-lg-flex p-2 gap-3 border rounded justify-content-between align-items-center">
                    <div class="col-md-1 text-center">NO</div>
                    <div class="col-md-2">Nama</div>
                    <div class="col-md-2">Nis</div>
                    <div class="col-md-3">Keterangan</div>
                    <div class="col-md-3 text-center">Absensi</div>
                </div>
                @foreach ($jadual->kelas->santri as $key => $santri)
                    <div class="d-md-flex d-sm-grid p-2 my-2 rounded gap-3 border justify-content-between align-items-center">
                        <div class="col-md-1 text-center text-sm-start text-md-center">{{$loop->iteration}}</div>
                        <div class="col-md-2 col-sm-12 text-start text-sm-center text-md-start fw-bold">{{$santri->nama_lengkap}}</div>
                        <div class="col-md-2 col-sm-12 text-start text-sm-center text-md-start my-2 my-md-0 my-lg-0">{{$santri->nisn}}</div>
                        <div class="col-md-3 col-sm-12 text-start text-sm-center text-md-start">
                            <x-form-input name="keterangan" placeholder="Keterangan" wire:model="keterangan.{{$key}}"/>
                        </div>
                        <div class="col-md-3 col-sm-12 text-center">
                            <div class="my-2 my-md-0 my-lg-0">
                                @if($this->cekAbsen($santri->id))
                                    @if($this->cekAbsen($santri->id)->status == 'hadir')
                                        <button class="btn btn-success">Hadir</button>
                                        <button type="button"
                                                wire:click.prevent="batalkan({{$this->cekAbsen($santri->id)->id}})"
                                                class="btn btn-light btn-border">
                                            <i class="ri-refresh-line"></i>
                                        </button>
                                    @elseif($this->cekAbsen($santri->id)->status == 'izin')
                                        <button class="btn btn-warning">Izin</button>
                                        <button type="button"
                                                wire:click.prevent="batalkan({{$this->cekAbsen($santri->id)->id}})"
                                                class="btn btn-light btn-border">
                                            <i class="ri-refresh-line"></i>
                                        </button>
                                    @elseif($this->cekAbsen($santri->id)->status == 'sakit')
                                        <button class="btn btn-info">Sakit</button>
                                        <button type="button"
                                                wire:click.prevent="batalkan({{$this->cekAbsen($santri->id)->id}})"
                                                class="btn btn-light btn-border">
                                            <i class="ri-refresh-line"></i>
                                        </button>
                                    @else
                                        <button class="btn btn-danger">Alfa</button>
                                        <button type="button"
                                                wire:click.prevent="batalkan({{$this->cekAbsen($santri->id)->id}})"
                                                class="btn btn-light btn-border">
                                            <i class="ri-refresh-line"></i>
                                        </button>
                                    @endif
                                @else
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button"
                                                wire:click.prevent="absen({{$santri->id}}, 'hadir', {{$key}})"
                                                class="btn btn-success">Hadir
                                        </button>
                                        <button type="button"
                                                wire:click.prevent="absen({{$santri->id}}, 'izin', {{$key}})"
                                                class="btn btn-warning">Izin
                                        </button>
                                        <button type="button"
                                                wire:click.prevent="absen({{$santri->id}}, 'sakit', {{$key}})"
                                                class="btn btn-info">Sakit
                                        </button>
                                        <button type="button"
                                                wire:click.prevent="absen({{$santri->id}}, 'alpa', {{$key}})"
                                                class="btn btn-danger">Alfa
                                        </button>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <div class="alert alert-outline alert-danger">
            <h5>Maaf anda tidak memiliki jadwal mengajar hari ini</h5>
        </div>
    @endif
</div>
