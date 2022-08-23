<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header border-0">
                    <h1 class="card-title">Siswa Terpilih</h1>
                </div>
                <div class="card-body">
                    <div class="alert alert-info">
                        Jika ada kesalahaan siswa silahkan pilih lagi siswa yang akan di pilih
                    </div>
                    <table class="table table-sm table-hover">
                        <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Santri</th>
                            <th>NISN</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($siswa_terpilih as $siswa)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$siswa->nama_lengkap}}</td>
                                <td>{{$siswa->nisn}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-body">
                    <form wire:submit.prevent="simpan">
                        <div class="form-group">
                            <x-form-select name="kelas_id" wire:model="kelas_id">
                                <option value="">Pilih Kelas</option>
                                @foreach($data_kelas as $kelas)
                                    <option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
                                @endforeach
                            </x-form-select>
                        </div>
                        <div class="form-group d-grid mt-4">
                            <button class="btn btn-success btn-border">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
