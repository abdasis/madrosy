<?php

namespace App\Http\Livewire\Tagihan;

use App\Models\Keuangan\KategoriTagihan;
use App\Models\Keuangan\Tagihan;
use App\Models\Keuangan\Transaksi;
use App\Services\PaymentGateway\CreateTokenService;
use Carbon\Carbon;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Bayar extends Component
{
    use LivewireAlert;

    public $transaksi;
    public $token;
    public $tagihan;
    public $kode;

    public function mount($kode)
    {

        $this->transaksi = Transaksi::where('kode_referensi', \Crypt::decryptString($kode))->firstOrFail();
        $this->tagihan = $this->transaksi->tagihan;

        if ($this->tagihan->sisa_tagihan == 'lunas') {
            $this->flash('info', 'Tagihan sudah berhasil dibayarkan', [], route('tagihan.detail', $this->tagihan->id));
        }

        //buat kode transaksi
        $kode_kategori = $this->tagihan->kategori->kode;
        $kode_transaksi = str_pad(now()->format('myis-') . $this->tagihan->santri_id, 8, 0, STR_PAD_LEFT);
        $this->transaksi->order_id = "{$kode_kategori}-{$kode_transaksi}";
        $this->transaksi->save();

        $midtrans = new CreateTokenService($this->transaksi);
        $this->token = $midtrans->generateSnapToken();
    }

    public function pay()
    {

        $this->emit('snapPay', $this->token);

    }

    public function render()
    {
        return view('livewire.tagihan.bayar');
    }
}
