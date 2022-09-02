<?php

namespace App\Services\PaymentGateway;

use App\Models\Transaksi;
use Carbon\Carbon;

class MidtranResponse
{
    public function updatedTransaksi($response)
    {
        $transaksi = Transaksi::create([
            'waktu_transaksi' => Carbon::now()->toDateTimeString(),
            'status_transaksi' => $response->status_code,
            'transaksi_id' => $response->kode_tagihan,
            'toko' => 'belum diketahui',
            'keterangan_status' => 'Menunggu pembayaran yang dipilih oleh santri',
            'kode_status' => 'pending',
            'tanda_terima' => 'belum diketahui',
            'waktu_penyelesaian' => 'belum diketahui',
            'jenis_pembayaran' => 'belum diketahui',
            'kode_pembayaran' => 'belum diketahui',
            'order_id' => 'belum diketahui',
            'merchant_id' => 'belum diketahui',
            'total' => $response->total_tagihan,
            'mata_uang' => 'IDR',
            'kode_persetujuan' => 'belum diketahui',
            'penipuan_status' => 'belum diketahui',
        ]);
    }
}
