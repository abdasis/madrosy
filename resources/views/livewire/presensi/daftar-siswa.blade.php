<div>
    {{-- Stop trying to control. --}}
    @if($jadual)
        <div class="alert alert-outline alert-info">
            <h5>Selamat Datang {{auth()->user()->name}}</h5>
            <p>Pada hari ini anda sedang mengajar di kelas <strong
                    class="text-dark">{{$jadual->kelas->nama_kelas}}</strong> mapel <strong
                    class="text-dark">{{$jadual->mapel->nama}}</strong> silahkan melakukan absensi siswa terlebih dahulu
            </p>
            Pelajaran di mulai dari jam {{\Carbon\Carbon::parse($jadual->jam_mulai)->format('H:i')}} dan berakhir
            jam {{\Carbon\Carbon::parse($jadual->jam_selesai)->format('H:i')}}
        </div>
        <div class="card border-light rounded">
            <div class="card-header border-bottom border-light">
                <h5 class="card-title mb-0">Siswa di Kelas ini</h5>
            </div>
            <div class="card-body bg-soft-light">
                <div class="d-none d-md-flex d-lg-flex p-2 gap-3 bg-white border rounded justify-content-between align-items-center">
                    <div class="col-md-1 text-center">NO</div>
                    <div class="col-md-2">Nama</div>
                    <div class="col-md-2">Nis</div>
                    <div class="col-md-3">Keterangan</div>
                    <div class="col-md-3 text-center">Absensi</div>
                </div>
                @foreach ($jadual->kelas->santri as $key => $santri)
                    <div class="d-md-flex d-sm-grid p-2 my-2 rounded gap-3 border justify-content-between align-items-center">
                        <div class="col-md-1 text-center">{{$loop->iteration}}</div>
                        <div class="col-md-2 col-sm-12 text-center text-sm-center text-md-start fw-bold">{{$santri->nama_lengkap}}</div>
                        <div class="col-md-2 col-sm-12 text-center text-sm-center text-md-start my-2 my-md-0 my-lg-0">{{$santri->nisn}}</div>
                        <div class="col-md-3 col-sm-12 text-center text-sm-center text-md-start">
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
