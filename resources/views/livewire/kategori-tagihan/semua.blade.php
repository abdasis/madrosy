<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}
    <div class="card">
        <div class="card-header border-0">
            <a href="{{route('kategori-tagihan.tambah')}}">
                <button class="btn btn-light waves-effect d-flex align-items-center gap-1 btn-border">
                    <i class="ri-add-line"></i>
                    Kategori Baru
                </button>
            </a>
        </div>
        <div class="card-body">
            <livewire:kategori-tagihan.tabel/>
        </div>
    </div>

</div>
