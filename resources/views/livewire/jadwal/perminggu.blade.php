<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="card rounded-3 border-light">
        <div class="card-header bg-white border-bottom border-light d-flex align-items-center">
            <h5 class="mb-0 flex-grow-1">Data Semua Jadwal</h5>
            <div class="filter-kelas">
                <x-form-select name="" class="form-select-sm" wire:model="kelas">
                    <option value="">Filter Perkelas</option>
                    @foreach($data_kelas  as $kelas)
                        <option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
                    @endforeach
                </x-form-select>
            </div>
        </div>
        <div class="card-body bg-soft-light">
            <h3 class="text-center my-3">Berikut Data Jadwal Pelajaran Kelas <div class="badge badge-outline-success">{{$nama_kelas}}</div></h3>
            <div class="row justify-content-between">
                @forelse($data_jadwal as $key => $jadwals)
                    <div class="col-md-6">
                        <div class="card shadow-none border border-light rounded">
                            <div class="card-header bg-soft-light border-bottom border-light"><h5 class="mb-0">{{$key}}</h5></div>
                            <div class="card-body bg-soft-light">
                                <table class="table table-sm">
                                    <thead>
                                    <tr>
                                        <th>Jam</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Guru</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($jadwals as $jadwals)
                                        <tr>
                                            <td class="align-middle">{{$loop->iteration}}</td>
                                            <td class="align-middle">{{$jadwals->mapel->nama}}</td>
                                            <td class="align-middle">{{$jadwals->guru->nama}}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-md-12">
                        <div class="alert alert-danger text-center">Data Jadwal Belum Tersedia</div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</div>
