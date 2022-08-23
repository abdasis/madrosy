<?php

namespace App\Http\Livewire\Kelas;

use App\Models\Kelas;
use Livewire\Component;

class Migrasi extends Component
{
    public function render()
    {
        return view('livewire.kelas.migrasi',[
            'data_kelas' => Kelas::get(),
        ]);
    }
}
