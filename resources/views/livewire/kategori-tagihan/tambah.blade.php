<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="alert alert-success alert-top-border alert-dismissible fade show" role="alert">
                        <i class="ri-information-fill me-3 align-middle fs-16 text-success"></i>
                        <span>Kamu bisa menambahkan kategori tagihan sesuai kebutuhan dari sekolah</span>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    <form wire:submit.prevent="simpan">
                        <div class="form-group mb-3">
                            <x-form-input type="text" name="nama_kategori" label="Nama Kategori" wire:model="nama_kategori" />
                        </div>
                        <div class="form-group mb-3">
                            <x-form-select name="tahun_ajaran_id" label="Tahun Ajaran" wire:model="tahun_ajaran_id">
                                <option value="">Pilih Jenis Tagihan</option>
                                @foreach($semua_tahun_ajaran as $tahun)
                                    <option value="{{$tahun->id}}">{{$tahun->tahun_awal}}/{{$tahun->tahun_akhir}}</option>
                                @endforeach
                            </x-form-select>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-select name="jenis_tagihan" label="Jenis Tagihan" wire:model="jenis_tagihan">
                                <option value="">Pilih Jenis Tagihan</option>
                                <option value="bulanan">Bulanan</option>
                                <option value="tahunan">Tahunan</option>
                                <option value="insidental">Insidental</option>
                            </x-form-select>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-group name="cicilan" label="Pembayaran bisa di angsur?">
                                <x-form-radio name="cicilan" wire:model="cicilan" value="1" label="Ya, Bisa" />
                                <x-form-radio name="cicilan" wire:model="cicilan" value="0" label="Tidak" />
                            </x-form-group>
                        </div>
                        <div class="form-gorup mb-3">
                            <x-form-textarea name="keterangan" wire:model="keterangan" label="Keterangan"/>
                        </div>
                        <div class="form-group mb-3">
                            <button
                                class="btn btn btn-success waves-effect waves-light d-flex align-items-center gap-1 btn-border float-end">
                                <i class="ri-save-line"></i>
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
