<?php

namespace App\Http\Livewire\Santri;

use App\Models\Kesiswaan\Santri;
use Livewire\Component;

class Semua extends Component
{
    public function render()
    {

        return view('livewire.santri.semua',[
            'total_putra' => Santri::where('jenis_kelamin', 'Laki-Laki')->count(),
            'total_putri' => Santri::where('jenis_kelamin', 'Perempuan')->count(),
            'total_santri' => Santri::count()
        ]);
    }
}
