<div>
    {{-- The Master doesn't talk, he acts. --}}
    <div class="card">
        <div class="card-header d-flex justify-content-between border-bottom-dashed align-items-center">
            <h5 class="m-0">
                <i class="mdi mdi-book-alphabet me-1"></i>
                Data Riwayat Pendidikan Guru</h5>
            <a href="{{route('riwayat-pendidikan.tambah')}}">
                <button class="btn btn-success btn-border btn-sm">Tambah Data</button>
            </a>
        </div>
        <div class="card-body">
            <livewire:riwayat-pendidikan.tabel/>
        </div>
    </div>
</div>
