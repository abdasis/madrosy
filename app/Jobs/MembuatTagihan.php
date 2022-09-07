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
        $transaksi = new \App\Repositories\Transaksi();
        $transaksi->create($this->tagihan->toArray());
    }
}


