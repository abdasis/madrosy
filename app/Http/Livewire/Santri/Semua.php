<?php

namespace App\Http\Livewire\Santri;

use App\Models\Kesiswaan\Santri;
use Livewire\Component;

class Semua extends Component
{
    public function render()
    {

        return view('livewire.santri.semua',[
            'total_putra' => Santri::where('jenis_kelamin', 'laki-laki')->count(),
            'total_putri' => Santri::where('jenis_kelamin', 'perempuan')->count(),
            'total_santri' => Santri::count()
        ]);
    }
}
