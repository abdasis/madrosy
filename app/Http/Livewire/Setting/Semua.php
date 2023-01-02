<?php

namespace App\Http\Livewire\Setting;

use App\Models\Commons\Preferensi;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use phpDocumentor\Reflection\TypeResolver;

class Semua extends Component
{
    use LivewireAlert;

    public function render()
    {
        return view('livewire.setting.semua');
    }
}
