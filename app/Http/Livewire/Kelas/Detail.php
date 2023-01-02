<?php

namespace App\Http\Livewire\Kelas;

use App\Models\Akademik\Kelas;
use Livewire\Component;

class Detail extends Component
{

    public $kelas;

    public function mount(Kelas $kelas)
    {
        $this->kelas = $kelas;
    }

    public function render()
    {
        return view('livewire.kelas.detail');
    }
}
