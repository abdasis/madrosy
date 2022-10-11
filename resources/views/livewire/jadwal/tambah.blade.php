<div>
    {{-- Do your work, then step back. --}}
    <div class="card">
        <div class="card-header border-bottom border-light">
            <h5 class="my-0">Tambah Jadwal Baru</h5>
        </div>
        <div class="card-body bg-soft-light">
            <form wire:submit.prevent="simpan">
                <div class="row justify-content-center">
                    <div class="col-md-7">
                        @if(session()->has('message'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('message') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <div class="row align-items-center mb-3 gap-2">
                            <div class="col-md-4 text-start">
                                Kode Jadwal
                            </div>
                            <div class="col">
                                <x-form-input name="kode" wire:model="kode" class="border-0 border-bottom"/>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3 gap-2">
                            <div class="col-md-4 text-start">
                                Kelas
                            </div>
                            <div class="col">
                                <x-form-select wire:model="kelas" name="kelas" class="border-0 border-bottom">
                                    <option value="">Pilih Kelas</option>
                                    @foreach($data_kelas as $key => $kelas)
                                        <option value="{{$kelas->id}}">{{$kelas->nama_kelas}}</option>
                                    @endforeach
                                </x-form-select>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3 gap-2">
                            <div class="col-md-4 text-start">
                                Guru
                            </div>
                            <div class="col">
                                <x-form-select wire:model="guru" name="guru" class="border-0 border-bottom">
                                    <option value="">Pilih Guru</option>
                                    @foreach($data_guru as $key => $guru)
                                        <option value="{{$guru->id}}">{{$guru->nama}}</option>
                                    @endforeach
                                </x-form-select>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3 gap-2">
                            <div class="col-md-4 text-start">
                                Mata Pelajaran
                            </div>
                            <div class="col">
                                <x-form-select wire:model="mapel" name="mapel" class="border-0 border-bottom">
                                    <option value="">Pilih Mapel</option>
                                    @foreach($data_pelajaran as $key => $pelajaran)
                                        <option value="{{$pelajaran->id}}">{{$pelajaran->nama}}</option>
                                    @endforeach
                                </x-form-select>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3 gap-2">
                            <div class="col-md-4 text-start">
                                Jam Mulai
                            </div>
                            <div class="col">
                                <x-form-input name="jam_mulai" wire:model="jam_mulai" class="border-0 border-bottom" type="time"/>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3 gap-2">
                            <div class="col-md-4 text-start">
                                Jam Selesai
                            </div>
                            <div class="col">
                                <x-form-input name="jam_selesai" wire:model="jam_selesai" class="border-0 border-bottom" type="time"/>
                            </div>
                        </div>
                        <div class="row align-items-center mb-3 gap-2">
                            <div class="col-md-4 text-start">
                                Hari
                            </div>
                            <div class="col">
                                <x-form-select wire:model="hari" name="hari" class="border-0 border-bottom">
                                    <option value="">Pilih Hari</option>
                                    @foreach($data_hari as $key => $hari)
                                        <option value="{{$hari}}">{{$hari}}</option>
                                    @endforeach
                                </x-form-select>
                            </div>
                        </div>
                        <div class="my-4">
                            <button class="btn btn-success btn-border waves-effect float-end">
                                <i class="ri-save-line"></i>
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
