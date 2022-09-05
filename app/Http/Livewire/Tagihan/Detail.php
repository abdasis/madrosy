<?php

namespace App\Http\Livewire\Tagihan;

use App\Models\Tagihan;
use Livewire\Component;

class Detail extends Component
{
    public $tagihan;
    public function mount($kode)
    {
        $this->tagihan = Tagihan::where('kode_tagihan', $kode)->first();
    }
    public function render()
    {
        return view('livewire.tagihan.detail');
    }
}
