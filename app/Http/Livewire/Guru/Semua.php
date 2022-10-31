<?php

namespace App\Http\Livewire\Guru;

use App\Models\Kepegawaian\Guru;
use Livewire\Component;

class Semua extends Component
{
    public function render()
    {
        return view('livewire.guru.semua', [
            'total_putra' => Guru::where('jenis_kelamin', 'Laki-Laki')->count(),
            'total_putri' => Guru::where('jenis_kelamin', 'Perempuan')->count(),
            'total_guru' => Guru::count(),
        ]);
    }
}
