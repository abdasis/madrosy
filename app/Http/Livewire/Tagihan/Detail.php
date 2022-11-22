<?php

namespace App\Http\Livewire\Tagihan;

use App\Models\Keuangan\Tagihan;
use App\Models\Keuangan\Transaksi;
use Carbon\Carbon;
use Livewire\Component;

class Detail extends Component
{
    public $tagihan;
    public $status;
    public $sisa_tagihan;
    public $pembayaran_berhasil;

    public function mount(Tagihan $tagihan)
    {

        $this->tagihan = $tagihan;

        $total_pembayaran = $tagihan->transaksi()->where('status_transaksi', 'berhasil')->sum('total');
        $this->pembayaran_berhasil = $tagihan->transaksi()->where('status_transaksi', 'berhasil')->get();
        $tgl_jatuh_tempo = Carbon::createFromDate($tagihan->tgl_jatuh_tempo);
        $tgl_hari_ini = Carbon::createFromDate(now());
        $this->sisa_tagihan = $tagihan->total_tagihan - $total_pembayaran;
        $this->status = $tagihan->sisa_tagihan;
    }


    public function render()
    {
        return view('livewire.tagihan.detail');
    }
}
