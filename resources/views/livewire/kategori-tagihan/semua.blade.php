<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="card">
        <div class="card-header border-0 d-flex align-items-center gap-2">
            <h1 class="card-title flex-grow-1">Tagihan</h1>
            <a href="{{route('kategori-tagihan.tambah')}}">
                <button class="btn btn-light waves-effect d-flex align-items-center gap-1 btn-border">
                    <i class="ri-add-line"></i>
                    Kategori Baru
                </button>
            </a>
            <a href="{{route('tagihan.atur-perkelas')}}">
                <button class="btn btn-light waves-effect d-flex align-items-center gap-1 btn-border">
                    <i class="ri-settings-2-line"></i>
                    Atur Tagihan
                </button>
            </a>
        </div>
        <div class="card-body">
            <livewire:kategori-tagihan.tabel/>
        </div>
    </div>

</div>
