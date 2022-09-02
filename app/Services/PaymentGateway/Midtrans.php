<?php

namespace App\Services\PaymentGateway;

use App\Models\Transaksi;
use Carbon\Carbon;

class Midtrans
{

    public function generateSnapToken($tagihan)
    {
        $params = [
            'transaction_details' => [
                'order_id' => $tagihan->kode_tagihan,
                'gross_amount' => $tagihan->total_tagihan,
            ],

            'customer_details' => [
                'first_name' => $tagihan->santri->nama_lengkap,
                'last_name' => '',
                'email' => $tagihan->santri->email,
                'phone' => $tagihan->santri->no_hp,
            ],
        ];

        return \Midtrans\Snap::getSnapToken($params);

    }

    public function buatTransaksi($tagihan)
    {
        $transaksi = Transaksi::create([
            'waktu_transaksi' => Carbon::now()->toDateTimeString(),
            'status_transaksi' => 'pending',
            'transaksi_id' => $tagihan->kode_tagihan,
            'toko' => 'belum diketahui',
            'keterangan_status' => 'Menunggu pembayaran yang dipilih oleh santri',
            'kode_status' => 'pending',
            'tanda_terima' => 'belum diketahui',
            'waktu_penyelesaian' => 'belum diketahui',
            'jenis_pembayaran' => 'belum diketahui',
            'kode_pembayaran' => 'belum diketahui',
            'order_id' => $tagihan->kode_tagihan,
            'merchant_id' => 'belum diketahui',
            'total' => $tagihan->total_tagihan,
            'mata_uang' => 'IDR',
            'kode_persetujuan' => 'belum diketahui',
            'penipuan_status' => 'belum diketahui',
            'token' => $this->generateSnapToken($tagihan),
            'link_pembayaran' => config('midtrans.midtrans_url') . $this->generateSnapToken($tagihan),
        ]);
    }
}
