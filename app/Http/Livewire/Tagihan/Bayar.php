<?php

namespace App\Http\Livewire\Tagihan;

use App\Models\KategoriTagihan;
use App\Models\Tagihan;
use App\Services\PaymentGateway\CreateTokenService;
use App\Services\PaymentGateway\Midtrans;
use Carbon\Carbon;
use Livewire\Component;

class Bayar extends Component
{
    public $tagihan;
    public $token;
    public function mount($kode)
    {
        $this->tagihan = Tagihan::where('kode_tagihan', $kode)->first();
        $transaksi = $this->tagihan->transaksi;
        $midtrans = new CreateTokenService($transaksi);
        $this->token = $midtrans->generateSnapToken();
        if (is_string($this->token)){
            $this->tagihan->transaksi->update([
                'token' => $this->token,
            ]);
        }else{
            $this->token = $this->tagihan->transaksi->token;
        }
    }
    public function render()
    {
        return view('livewire.tagihan.bayar')->layout('layouts.guest');
    }
}
