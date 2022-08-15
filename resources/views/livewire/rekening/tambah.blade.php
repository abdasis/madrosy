<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="card">
        <div class="card-header border-bottom-dashed">
            <h4 class="card-title mb-0">
                Buka Rekening Baru
            </h4>
        </div>
        <div class="card-body py-3">
            <div class="row">
                <div class="col-md-6">
                    <form wire:submit.prevent="simpan">
                        <div class="form-group mb-3">
                            <x-form-select wire:model="santri_id" name="santri_id" label="Nama Santri" >
                                <option value="">Pilih Santri</option>
                                @foreach($semua_santri as $santri)
                                    <option value="{{$santri->id}}">{{$santri->nama_lengkap}}</option>
                                @endforeach
                            </x-form-select>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nomor Rekening</label>
                            <div class="form-icon">
                                <x-form-input wire:model="nomor_rekening" name="nomor_rekening" class="form-control form-control-icon" id="iconInput" placeholder="38489368685" />
                                <i class="ri-bank-card-2-line"></i>
                            </div>
                            <small class="text-muted">* Reload (Ctrl+R) untuk mendapatkan nomor rekening baru</small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Jenis Rekening</label>
                            <div class="d-flex align-items-center gap-3">
                                <x-form-radio wire:model="jenis_rekening" label="Harian" value="harian" name="jenis_rekening" id="harian" checked="" />
                                <x-form-radio wire:model="jenis_rekening" label="Tabungan" value="tabungan" name="jenis_rekening" id="tabungan" checked="" />
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Limit Harian</label>
                            <div class="form-icon">
                                <x-form-input :show-errors="false" wire:model="limit_harian" name="limit_harian" class="form-control form-control-icon" id="iconInput" placeholder="10000" />
                                <i class=" ri-secure-payment-line"></i>
                            </div>
                            @error('limit_harian')
                            <small class="text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Passcode</label>
                            <div class="form-icon">
                                <x-form-input type="password" name="passcode" :show-errors="false" class="form-control-icon" wire:model="passcode" placeholder="123456" maxlength="6"/>
                                <i class="ri-lock-2-line"></i>
                            </div>
                            @error('passcode')
                            <small class="text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Konfirmasi Passcode</label>
                            <div class="form-icon">
                                <x-form-input type="password" :show-errors="false" name="passcode_confirmation" class="form-control-icon" wire:model="passcode_confirmation" placeholder="123456" maxlength="6"/>
                                <i class="ri-lock-2-line"></i>
                            </div>
                            @error('passcode_confirmation')
                            <small class="text-danger">
                                {{$message}}
                            </small>
                            @enderror
                        </div>
                        <div class="form-group mb-3">
                            <button class="btn btn-success btn-border rounded-3 float-end">
                                <i class="ri-save-line"></i>
                                <span>Simpan</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
