<div>
    <div class="card">
        <div class="card-header d-flex border-bottom border-light">
            <h1 class="card-title mb-0 flex-grow-0">Data Semua Tagihan</h1>
        </div>
        <div class="card-body bg-soft-light">
            @hasanyrole('Siswa')
            <livewire:santri.tabel-tagihan id="{{auth()->user()->santri->id}}" />
            @endhasanyrole
            @hasanyrole('Administrator')
            <livewire:tagihan.tabel/>
            @endhasanyrole
        </div>
    </div>
</div>
