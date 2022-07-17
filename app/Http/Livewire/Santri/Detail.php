<?php

namespace App\Http\Livewire\Santri;

use App\Models\Santri;
use Livewire\Component;

class Detail extends Component
{
    public $santri;
    public function mount($id)
    {
        $this->santri = Santri::find($id);
    }
    public function render()
    {
        return view('livewire.santri.detail');
    }
}
