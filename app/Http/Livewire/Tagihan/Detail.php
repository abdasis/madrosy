<?php

namespace App\Http\Livewire\Tagihan;

use App\Models\Keuangan\Tagihan;
use Carbon\Carbon;
use Livewire\Component;

class Detail extends Component
{
    public $tagihan;
    public $status;
    public $sisa_tagihan;

    public function mount(Tagihan $tagihan)
    {

        $this->tagihan = $tagihan;

        $total_pembayaran = $tagihan->transaksi()->sum('total');
        $tgl_jatuh_tempo = Carbon::createFromDate($tagihan->tgl_jatuh_tempo);
        $tgl_hari_ini = Carbon::createFromDate(now());

        $this->sisa_tagihan = $tagihan->total_tagihan - $total_pembayaran;

        if ($total_pembayaran >= $tagihan->total_tagihan) {
            $this->status = 'lunas';
        } elseif ($tagihan && $total_pembayaran < $tagihan->total_tagihan) {
            $this->status = 'sebagian';
        } elseif (!$tagihan || $total_pembayaran < $tagihan->total_tagihan && $tgl_hari_ini->gte($tgl_jatuh_tempo)) {
            $this->status = 'jatuh tempo';
        } else {
            $this->status = 'Belum dibayar';
        }
    }

    public function render()
    {
        return view('livewire.tagihan.detail');
    }
}
