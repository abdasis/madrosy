<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h4>Laporan Absensi Semua Siswa</h4>
    <p class="text-muted">
        Data semua absensi akan di tampilkan semua pada halaman ini, silahkan pilih tanggal untuk melihat data absensi pada tanggal tersebut.
    </p>
    <div class="table-responsive">
        <table class="table table-sm table-hover bg-white">
            <thead class="bg-white">
            <tr>
                <th width="5%" class="text-center align-middle">No</th>
                <th width="20%" class="align-middle">Siswa</th>
                @foreach($data_absensi as $tanggal => $value)
                    <th width="10%" class="text-center">{{$tanggal}}</th>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($data_absensi as $absensi)
                @foreach($absensi as $key => $value)
                    <tr>
                        <td class="text-center">{{$loop->iteration}}</td>
                        <td>{{$value->santri->nama_lengkap}}</td>
                        <td class="text-center">
                            @if($value->status == 'hadir')
                                <i class="ri-checkbox-circle-fill  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Hadir"></i>
                            @elseif($value->status == 'izin')
                                <i class="ri-information-line text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Izin"></i>
                            @elseif($value->status == 'sakit')
                                <i class="ri-lungs-fill text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Sakit"></i>
                            @else
                                <i class="ri-user-unfollow-line text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Tidak Masuk"></i>
                            @endif
                        </td>
                    </tr>
                @endforeach
            @endforeach
            </tbody>
        </table>
    </div>
</div>
