<div>
    {{-- Success is as dangerous as failure. --}}
    <div class="card">
        <div class="card-body p-4">
            <h4>Catat Konseling</h4>
            <div class="box-form mt-5">
                <div class="row">
                    <div class="col-md-8">
                        <form wire:submit.prevent="update">
                            <div class="row align-items-center gy-4">
                                <div class="col-md-3">
                                    <label for="">Nama Siswa</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <x-form-select name="santri_id" wire:model="santri_id" class="form-control">
                                            <option value="">Pilih Siswa</option>
                                            @foreach($semua_siswa as $siswa)
                                                <option value="{{$siswa->id}}">{{$siswa->nama_lengkap}}</option>
                                            @endforeach
                                        </x-form-select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="">Kasus/Pelanggaran</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <x-form-select name="pelanggaran_id" wire:model="pelanggaran_id" class="form-control">
                                            <option value="">Pilih Pelanggaran</option>
                                            @foreach($semua_pelanggaran as $pelanggaran)
                                                <option value="{{$pelanggaran->id}}">{{$pelanggaran->kasus}} ({{$pelanggaran->bobot}})</option>
                                            @endforeach
                                        </x-form-select>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="">Tanggal</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group" wire:ignore.self>
                                        <x-form-input
                                            name="tanggal"
                                            wire:model="tanggal"
                                            data-provider="flatpickr"
                                            data-date-format="d F, Y"
                                            readonly="readonly"
                                            placeholder="Masukan Tanggal"
                                        />
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for=""> Keterangan </label>
                                </div>
                                <div class="col-md-9">
                                    <x-form-textarea
                                        name="keterangan"
                                        wire:model="keterangan"
                                        class="form-control"
                                        rows="3"
                                        placeholder="Masukan Layanan Konseling"
                                    ></x-form-textarea>
                                </div>


                                <div class="col-md-3">
                                    <label for="foto_bukti">Photo Bukti</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <x-form-input
                                            type="file"
                                            name="foto_buktu"
                                            wire:model="foto_bukti"
                                            placeholder="Masukan Tanggal"
                                        />
                                        @if($errors->any())
                                            @foreach($errors->get('foto_bukti') as $error)
                                                <small class="text-danger">{{$error}}</small>
                                            @endforeach
                                        @endif
                                    </div>

                                    @if(!$errors->has('foto_bukti'))
                                        @if ($foto_bukti)
                                            <img style="object-fit: contain"
                                                 class="avatar-md img-thumbnail img-fluid my-2"
                                                 src="{{  $foto_bukti->temporaryUrl() }}">
                                        @elseif($preview_foto)
                                            <img style="object-fit: contain"
                                                 class="avatar-md img-thumbnail img-fluid my-2"
                                                 src="{{  asset($preview_foto) }}">
                                        @endif
                                    @endif
                                </div>


                                <div class="form-group d-flex justify-content-end">
                                    <button class="btn btn-success btn-border d-flex align-items-center gap-1">
                                        <i class="ri-save-line fs-16"></i>
                                        Simpan
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
