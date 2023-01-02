<?php

namespace App\Http\Livewire\Pelanggaran;

use Livewire\Component;

class Semua extends Component
{
    public $editStatus = false;

    public function render()
    {
        return view('livewire.pelanggaran.semua');
    }
}
