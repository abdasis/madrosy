<?php

namespace App\Jobs;

use App\Models\Tagihan;
use App\Models\Transaksi;
use App\Services\PaymentGateway\CreateTokenService;
use App\Services\PaymentGateway\Midtrans;
use Barryvdh\Debugbar\Facades\Debugbar;
use Carbon\Carbon;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Log;

class MembuatTagihan implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;


    protected $tagihan;

    public function __construct(Tagihan $tagihan)
    {
        $this->tagihan = $tagihan;

    }

    public function handle()
    {
        $midtrans = new CreateTokenService($this->tagihan);
        $token = $midtrans->generateSnapToken();

        try {
            $transaksi = Transaksi::create([
                'waktu_transaksi' => Carbon::now()->toDateTimeString(),
                'status_transaksi' => 'pending',
                'transaksi_id' => $this->tagihan->kode_tagihan,
                'toko' => 'belum diketahui',
                'keterangan_status' => 'Menunggu pembayaran yang dipilih oleh santri',
                'kode_status' => 'pending',
                'tanda_terima' => 'belum diketahui',
                'waktu_penyelesaian' => 'belum diketahui',
                'jenis_pembayaran' => 'belum diketahui',
                'kode_pembayaran' => 'belum diketahui',
                'order_id' => $this->tagihan->kode_tagihan,
                'merchant_id' => 'belum diketahui',
                'total' => $this->tagihan->total_tagihan,
                'mata_uang' => 'IDR',
                'kode_persetujuan' => 'belum diketahui',
                'penipuan_status' => 'belum diketahui',
                'token' => $token,
                'link_pembayaran' => config('midtrans.midtrans_url') . $token,
            ]);

            if ($transaksi) {
                Log::info('Transaksi berhasil dibuat');
            }
        }catch (\Exception $e) {
            Log::error($e->getMessage());
        }

    }
}


