<div>
    {{-- Stop trying to control. --}}
    @if($jadual)
        <div class="alert alert-outline alert-info">
            <h5>Selamat Datang {{auth()->user()->name}}</h5>
            <p>Pada hari ini anda sedang mengajar di kelas <strong class="text-dark">{{$jadual->kelas->nama_kelas}}</strong> mapel <strong class="text-dark">{{$jadual->mapel->nama}}</strong> silahkan melakukan absensi siswa terlebih dahulu</p>
            Pelajaran di mulai dari jam {{\Carbon\Carbon::parse($jadual->jam_mulai)->format('H:i')}} dan berakhir jam {{\Carbon\Carbon::parse($jadual->jam_selesai)->format('H:i')}}
        </div>
        <div class="card">
            <div class="card-header">
                <h5 class="card-title mb-0">Siswa di Kelas ini</h5>
            </div>
            <div class="card-body">
                <table class="table table-card">
                    <thead class="table-light">
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>NIS</th>
                        <th>Keterangan</th>
                        <th class="text-center">Absen</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($jadual->kelas->santri as $key => $santri)
                        <tr>
                            <td class="align-middle">{{$loop->iteration}}</td>
                            <td class="align-middle">{{$santri->nama_lengkap}}</td>
                            <td class="align-middle">{{$santri->nisn}}</td>
                            <th class="align-middle">
                                <x-form-input name="keterangan" wire:model="keterangan.{{$key}}" />
                            </th>
                            <td class="align-middle text-center" width="30%">
                                @if($this->cekAbsen($santri->id))
                                    @if($this->cekAbsen($santri->id)->status == 'hadir')
                                        <button class="btn btn-success">Hadir</button>
                                        <button type="button" wire:click.prevent="batalkan({{$this->cekAbsen($santri->id)->id}})" class="btn btn-light btn-border">
                                            <i class="ri-refresh-line"></i>
                                        </button>
                                    @elseif($this->cekAbsen($santri->id)->status == 'izin')
                                        <button class="btn btn-warning">Izin</button>
                                        <button type="button" wire:click.prevent="batalkan({{$this->cekAbsen($santri->id)->id}})" class="btn btn-light btn-border">
                                            <i class="ri-refresh-line"></i>
                                        </button>
                                    @elseif($this->cekAbsen($santri->id)->status == 'sakit')
                                        <button class="btn btn-info">Sakit</button>
                                        <button type="button" wire:click.prevent="batalkan({{$this->cekAbsen($santri->id)->id}})" class="btn btn-light btn-border">
                                            <i class="ri-refresh-line"></i>
                                        </button>
                                    @else
                                        <button class="btn btn-danger">Alfa</button>
                                        <button type="button" wire:click.prevent="batalkan({{$this->cekAbsen($santri->id)->id}})" class="btn btn-light btn-border">
                                            <i class="ri-refresh-line"></i>
                                        </button>
                                    @endif
                                @else
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button" wire:click.prevent="absen({{$santri->id}}, 'hadir', {{$key}})" class="btn btn-success">Hadir</button>
                                        <button type="button" wire:click.prevent="absen({{$santri->id}}, 'izin', {{$key}})" class="btn btn-warning">Izin</button>
                                        <button type="button" wire:click.prevent="absen({{$santri->id}}, 'sakit', {{$key}})" class="btn btn-info">Sakit</button>
                                        <button type="button" wire:click.prevent="absen({{$santri->id}}, 'alpa', {{$key}})" class="btn btn-danger">Alfa</button>
                                    </div>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @else
        <div class="alert alert-outline alert-danger">
            <h5>Maaf anda tidak memiliki jadwal mengajar hari ini</h5>
        </div>
    @endif
</div>
