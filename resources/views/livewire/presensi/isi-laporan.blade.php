<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="card">
        <div class="card-body mt-3">

            @if($data_jadwal)
               {{-- <div class="d-flex align-items-center mb-5">
                    <div class="col-md-4 text-end">
                        <img src="{{asset('assets/images/logo-smkn-7-semarang.png')}}" class="avatar-lg" height="20px" alt="">
                    </div>
                    <div class="col-md-4">
                        <h2 class="text-center">SMK MUHAMMADIYAH</h2>
                        <h5 class="text-center">Lamongan</h5>
                        <hr>
                        <h5 class="text-center">LAPORAN ABSENSI SAMPAI PERTEMUAN KE-{{count($data_jadwal[0]['data_absensi'])}}</h5>
                    </div>
                </div>--}}
                <table class="table table-sm">
                    <thead>
                    <tr>
                        <th rowspan="2" class="align-middle">No.</th>
                        <th rowspan="2" class="align-middle">Nama Siswa</th>
                        <th colspan="{{count($data_jadwal[0]['data_absensi'])}}"  class="text-center">Data Absensi</th>
                        <th colspan="4" class="text-center">Total</th>
                    </tr>
                    <tr>
                        @foreach($data_jadwal[0]['data_absensi'] as $absensi)
                            <th class="text-center">{{$absensi['tanggal']}}</th>
                        @endforeach
                        <th class="text-center">Hadir</th>
                        <th class="text-center">Izin</th>
                        <th class="text-center">Sakit</th>
                        <th class="text-center">Alpa</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data_jadwal as $jadwal)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$jadwal['santri']}}</td>
                            @foreach($jadwal['data_absensi'] as $absensi)
                                <td class="text-center">
                                    @if($absensi['status'] == 'hadir')
                                        <i class="ri-checkbox-circle-line text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$absensi['status']}}"></i>
                                    @elseif($absensi['status'] == 'sakit')
                                        <i class="ri-add-box-fill text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$absensi['status']}}"></i>
                                    @elseif($absensi['status'] == 'izin')
                                        <i class="ri-information-line text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$absensi['status']}}"></i>
                                    @elseif($absensi['status'] == 'alpa')
                                        <i class=" ri-close-circle-line text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="{{$absensi['status']}}"></i>
                                    @endif
                                </td>
                            @endforeach
                            <td class="text-center">{{$jadwal['total_hadir']}}</td>
                            <td class="text-center">{{$jadwal['total_izin']}}</td>
                            <td class="text-center">{{$jadwal['total_sakit']}}</td>
                            <td class="text-center">{{$jadwal['total_alpa']}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            @else
                <div class="alert alert-info text-center">
                    {{Str::title("lakukan login dikelas untuk melihat presensi siswa")}}
                </div>
            @endif
        </div>
    </div>
</div>
