<div>
    {{-- Because she competes with no one, no one can compete with her. --}}
    @if($status_absensi == 'valid')
        <div class="row gy-3">
            @foreach($data_jadwal_guru as $jadwal_perguru)
                <div class="col-md-3">
                    <!-- Ribbon Shape -->
                    <div class="card ribbon-box border shadow-none mb-lg-0">
                        <div class="card-body">
                            <div class="ribbon ribbon-primary ribbon-shape">{{$jadwal_perguru->kelas->nama_kelas}}</div>
                            <h5 class="fs-14 text-end">{{Str::limit($jadwal_perguru->mapel->nama,20)}}</h5>
                            <div class="ribbon-content text-muted mt-4">
                                <table class="table table-sm">
                                    <tr>
                                        <td>Senin</td>
                                        <td>:</td>
                                        <td>{{$jadwal_perguru->hari}}</td>
                                    </tr>
                                    <tr>
                                        <td>Jam Mulai</td>
                                        <td>:</td>
                                        <td>{{$jadwal_perguru->jam_mulai}}</td>
                                    </tr>
                                    <tr>
                                        <td>Jam Selesai</td>
                                        <td>:</td>
                                        <td>{{$jadwal_perguru->jam_selesai}}</td>
                                    </tr>
                                </table>
                                <a href="{{route('presensi.daftar-siswa', $jadwal_perguru)}}">
                                    <div class="d-grid">
                                        <button class="btn btn btn-dark btn-border btn-sm">
                                            Absen Sekarang
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        @if($data_jadwal_hari_ini->count() > 0)
            <div class="my-4 text-center">
                <button class="btn btn-primary btn-border collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#jadwalLainnya" aria-expanded="false" aria-controls="collapseExample">
                    Jadwal Lainnya
                </button>
            </div>
            <div class="collapse" id="jadwalLainnya" style="">
                <div class="row gy-3">
                    @foreach($data_jadwal_hari_ini as $jadwal_hari_ini)
                        <div class="col-md-3">
                            <div class="card ribbon-box border shadow-none mb-lg-0">
                                <div class="card-body">
                                    <div
                                        class="ribbon ribbon-primary ribbon-shape">{{$jadwal_hari_ini->kelas->nama_kelas}}</div>
                                    <h5 class="fs-14 text-end">{{Str::limit($jadwal_hari_ini->mapel->nama,20)}}</h5>
                                    <div class="ribbon-content text-muted mt-4">
                                        <table class="table table-sm">
                                            <tr>
                                                <td>Senin</td>
                                                <td>:</td>
                                                <td>{{$jadwal_hari_ini->hari}}</td>
                                            </tr>
                                            <tr>
                                                <td>Jam Mulai</td>
                                                <td>:</td>
                                                <td>{{$jadwal_hari_ini->jam_mulai}}</td>
                                            </tr>
                                            <tr>
                                                <td>Jam Selesai</td>
                                                <td>:</td>
                                                <td>{{$jadwal_hari_ini->jam_selesai}}</td>
                                            </tr>
                                            <tr>
                                                <td>Guru</td>
                                                <td>:</td>
                                                <td>{{$jadwal_hari_ini->guru->nama}}</td>
                                            </tr>
                                        </table>
                                        <a href="{{route('presensi.daftar-siswa', $jadwal_hari_ini)}}">
                                            <div class="d-grid">
                                                <button class="btn btn btn-dark btn-border btn-sm">
                                                    Lihat Presensi
                                                </button>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @else
            <div class="h-100 my-3">
                <div class="card bg-transparent shadow-none">
                    <div class="card-body d-flex align-items-center">
                        <div class="nodata d-grid mx-auto align-middle text-center">
                            <lord-icon
                                src="https://cdn.lordicon.com/jvucoldz.json"
                                trigger="loop"
                                delay="2000"
                                style="width:200px;height:200px">
                            </lord-icon>
                            <h5 class="my-0">Tidak ada jadwal lain hari ini</h5>
                        </div>

                    </div>
                </div>
            </div>
        @endif
    @else
        <div class="alert alert-warning">
            Kamu belum melakukan absensi, silahkan klik <a href="{{route('presensi.scan-qr')}}">disini</a> untuk
            melakukan absensi terlebih dahulu
        </div>
    @endif
</div>
