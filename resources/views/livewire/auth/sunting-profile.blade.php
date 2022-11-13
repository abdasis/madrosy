<div>
    {{-- Close your eyes. Count to one. That is how long forever feels. --}}
    <div class="card">
        <div class="card-header border-bottom border-light">
            <h5 class="mb-0">Sunting Profile</h5>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="simpan">
                <div class="row">
                    <div class="col-md-5">
                        <p class="alert alert-info">
                            Pada halaman ini kamu memungkinkan untuk mengubah data user login kamu, untuk mengubah data
                            diri anda
                            kamu hanya bisa mengubah dengan se izin administrator saja
                        </p>
                        <div class="form-group mb-3">
                            <x-form-input name="password_saat_ini" type="password" wire:model="password_saat_ini"
                                          label="Password Saat Ini" placeholder="Masukan password saat ini"/>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-input name="password" type="password" wire:model="password" label="Password Baru"/>
                            <small class="text-dark">
                                Usahakan password yang anda masukan memiliki karakter yang unik
                            </small>
                        </div>
                        <div class="form-group mb-3">
                            <x-form-input name="password_confirmation" type="password"
                                          wire:model="password_confirmation" label="Konfirmasi Password Baru"
                                          placeholder="Masukan Konfirmasi Password"/>
                            <small class="text-dark">
                                Masukan kembali password baru yang mau anda gunakan
                            </small>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-success rounded-3 float-end">
                                <span class="ri-save-line"></span>
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
