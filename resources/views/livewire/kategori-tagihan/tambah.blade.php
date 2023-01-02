<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <form wire:submit.prevent="simpan">
                        <div class="form-group mb-3">
                            <x-form-input type="text" name="nama_kategori" label="Nama Kategori" wire:model="nama_kategori" placeholder="e.g: Daftar Ulang" />
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
                            <x-form-textarea placeholder="Masukan keterangan tagihan" name="keterangan" wire:model="keterangan" label="Keterangan"/>
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
                <div class="col-md-5">
                    <div class="alert alert-secondary fade show" role="alert">
                        <i class="ri-question-line align-middle fs-16"></i> Bantuan <br>
                        <ul>
                            <li>Nama Kategori Sesuaikan dengan Nama Tagihan yang akan dibuat, e.g <strong>Daftar Ulang</strong></li>
                            <li>Pilih tahun ajaran yang sedang aktif saat ini</li>
                            <li>Jenis tagihan bisa kamu pilih sesuaikan dengan kebutuhan dari tagihan, misal untuk SPP di set ke bulanan</li>
                            <li>Pembayarna yang bisa di angsur, kamu bisa mengirim tagihan nantinya sesuai yang ingin dibayarkan oleh wali murid</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

