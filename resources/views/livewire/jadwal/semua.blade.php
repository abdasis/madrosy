<div>
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="card">
        <div class="card-header border-bottom border-light d-flex align-items-center">
            <h5 class="my-0 flex-grow-1">Semua Jadwal</h5>
            <div class="tombol-kanan d-flex gap-2">
                <a href="{{route('jadwal.tambah')}}">
                    <button class="btn btn-light btn-sm waves-effect btn-border d-flex gap-1 align-items-center">
                        <i class="ri-add-line"></i>
                        Jadwal Baru
                    </button>
                </a>
                <a href="{{route('jadwal.perminggu')}}">
                    <button
                        class="btn btn-light btn-sm waves-effect btn-border d-flex gap-1 align-items-center">
                        <i class="ri-calendar-2-line"></i>
                        Jadwal Perminggu
                    </button>
                </a>
            </div>
        </div>
        <div class="card-body bg-soft-light">
            <livewire:jadwal.tabel/>
        </div>
    </div>
</div>
