<?php

namespace App\Http\Livewire\Tagihan;

use App\Models\Keuangan\Tagihan;
use Livewire\Component;

class Detail extends Component
{
    public $tagihan;

    public function mount(Tagihan $tagihan)
    {

        $this->tagihan = $tagihan;
    }

    public function render()
    {
        return view('livewire.tagihan.detail');
    }
}
