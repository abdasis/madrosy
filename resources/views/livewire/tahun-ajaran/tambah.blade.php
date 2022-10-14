<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="card">
        <div class="card-header d-flex border-bottom border-light">
            <h4 class="card-title mb-0">Tambah Tahun Ajaran</h4>
        </div>
        <div class="card-body bg-soft-light">
            <div class="row">
                <div class="col-md-6">
                    <form wire:submit.prevent="simpan">
                        <div class="form-group mb-3">
                            <x-form-select label="Tahun Awal" name="tahun_awal" wire:model="tahun_awal">
                                <option value="">Pilih Tahun</option>
                                @foreach(range(\Carbon\Carbon::now()->subYear()->format('Y'), date('Y') - 9) as $tahun)
                                    <option value="{{$tahun}}">{{$tahun}}</option>
                                @endforeach
                            </x-form-select>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-select name="tahun_akhir" wire:model="tahun_akhir" label="Tahun Akhir">
                                <option value="">Pilih Tahun</option>
                                @foreach(range(date('Y'), date('Y') - 10) as $tahun)
                                    <option value="{{$tahun}}">{{$tahun}}</option>
                                @endforeach
                            </x-form-select>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-select name="status" wire:model="status" label="Status">
                                <option value="">Pilih Status</option>
                                <option value="aktif">Aktif</option>
                                <option value="non-aktif">Non Aktif</option>
                            </x-form-select>
                        </div>
                        <div class="form-group mb-3">
                            <button class="btn btn-success btn-border d-flex gap-1 float-end">
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
