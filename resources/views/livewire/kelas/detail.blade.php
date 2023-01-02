<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header border-bottom border-light">
                    <h5 class="mb-0">Detail Kelas</h5>
                </div>
                <div class="card-body bg-soft-light">
                    <table class="table table-borderless">
                        <tr>
                            <td>Kode Kelas</td>
                            <td>:</td>
                            <td>{{$kelas->kode_kelas}}</td>
                        </tr>
                        <tr>
                            <td>Kelas</td>
                            <td>:</td>
                            <td>{{$kelas->nama_kelas}}</td>
                        </tr>
                        <tr>
                            <td>Wali Kelas</td>
                            <td>:</td>
                            <td>{{$kelas->guru->nama}}</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>:</td>
                            <td>{{$kelas->santri->count()}} siswa</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header border-bottom border-light">
                    <h5 class="mb-0">Data Siswa di Kelas</h5>
                </div>
                <div class="card-body bg-soft-light">
                    <livewire:kelas.table-siswa :kelas_id="$kelas->id"/>
                </div>
            </div>
        </div>
    </div>
</div>
