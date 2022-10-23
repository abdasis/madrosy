<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Dashboard extends Component
{
    public function render()
    {
        $user = auth()->user();
        $santri = $user->santri;
        $kelas = $santri->kelas;
        return view('livewire.dashboard',[
            'user' => $user,
            'santri' => $santri,
            'kelas' => $kelas,
        ]);
    }
}
