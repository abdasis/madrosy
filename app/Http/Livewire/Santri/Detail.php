<?php

namespace App\Http\Livewire\Santri;

use App\Models\Kesiswaan\Santri;
use App\Traits\KonfirmasiHapus;
use Livewire\Component;

class Detail extends Component
{
    use KonfirmasiHapus;

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
