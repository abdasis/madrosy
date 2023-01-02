<?php

namespace App\Http\Livewire\Tagihan;

use App\Models\Keuangan\Transaksi;
use Livewire\Component;

class DetailPembayaran extends Component
{
    public $pembayaran;
    public function mount($id)
    {
        $this->pembayaran = Transaksi::find($id);
    }
    public function render()
    {
        return view('livewire.tagihan.detail-pembayaran');
    }
}
