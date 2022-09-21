<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <h4>Laporan Absensi Semua Siswa</h4>
    <p class="text-muted">
        Data semua absensi akan di tampilkan semua pada halaman ini, silahkan pilih tanggal untuk melihat data absensi pada tanggal tersebut.
    </p>
    <table class="table table-sm table-hover">
        <thead class="table-light">
        <tr>
            <th class="align-middle" rowspan="2">No</th>
            <th class="align-middle" rowspan="2">Siswa</th>
            <th class="align-middle text-center" colspan="6">Hari</th>
            <th class="text-start align-middle" rowspan="2">Keterangan</th>
        </tr>
        <tr>
            <th>Senin</th>
            <th>Selasa</th>
            <th>Rabu</th>
            <th>Kamis</th>
            <th>Jum'at</th>
            <th>Sabtu</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data_santri as $santri)
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>{{$santri->nama_lengkap}}</td>
                @foreach($santri->data_absensi as $absensi)
                    <td>{{$absensi->status}}</td>
                @endforeach
                <td>Keterangan</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
