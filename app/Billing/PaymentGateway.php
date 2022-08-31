<?php

namespace App\Billing;

class PaymentGateway
{
    public function charge($tagihan)
    {


        $params = [
            'transaction_details' => [
                'order_id' => $tagihan->kategori->nama_kategori,
                'gross_amount' => $tagihan->total_tagihan,
            ],
            'customer_details' => [
                'first_name' => $tagihan->santri->nama_lengkap,
                'last_name' => '',
                'email' => $tagihan->santri->email,
                'phone' => $tagihan->santri->no_hp,
            ],
        ];

        return $this->generateSnapToken($params);

    }

    public function generateSnapToken($params)
    {
        return \Midtrans\Snap::getSnapToken($params);
    }
}
