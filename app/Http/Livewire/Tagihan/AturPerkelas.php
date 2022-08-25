<?php

namespace App\Http\Livewire\Tagihan;

use App\Models\Kelas;
use App\Models\TahunAjaran;
use Livewire\Component;

class AturPerkelas extends Component
{
    public function render()
    {
        return view('livewire.tagihan.atur-perkelas',[
            'data_kelas' =>     Kelas::orderBy('nama_kelas', 'asc')->get(),
            'data_tahun_ajaran' => TahunAjaran::orderBy('tahun_awal', 'desc')->get()
        ]);
    }
}
