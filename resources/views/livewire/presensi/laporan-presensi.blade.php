<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="row gy-3">
        @foreach($data_mapel  as $mapel)
            <div class="col-md-4">
                <!-- Ribbon Shape -->
                <div class="card ribbon-box border shadow-none mb-lg-0">
                    <div class="card-body">
                        <div class="ribbon ribbon-primary ribbon-shape">{{$mapel->kelas->nama_kelas}}</div>
                        <h5 class="fs-14 text-end">{{Str::limit($mapel->mapel->nama,20)}}</h5>
                        <div class="ribbon-content text-muted mt-4">
                            <table class="table table-sm">
                                <tr>
                                    <td>Senin</td>
                                    <td>:</td>
                                    <td>{{$mapel->hari}}</td>
                                </tr>
                                <tr>
                                    <td>Jam Mulai</td>
                                    <td>:</td>
                                    <td>{{$mapel->jam_mulai}}</td>
                                </tr>
                                <tr>
                                    <td>Jam Selesai</td>
                                    <td>:</td>
                                    <td>{{$mapel->jam_selesai}}</td>
                                </tr>
                            </table>
                            <a href="{{route('presensi.isi-laporan', $mapel)}}">
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

