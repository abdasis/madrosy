<?php

namespace App\Jobs;

use App\Models\Keuangan\Tagihan;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

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


