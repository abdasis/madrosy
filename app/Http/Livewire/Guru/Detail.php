<?php

namespace App\Http\Livewire\Guru;

use App\Models\Kepegawaian\Guru;
use Livewire\Component;

class Detail extends Component
{

    public $guru;
    public function mount(Guru $guru)
    {
        $this->guru = $guru;
    }
    public function render()
    {
        return view('livewire.guru.detail');
    }
}
