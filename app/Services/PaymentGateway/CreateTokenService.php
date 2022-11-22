<?php

namespace App\Services\PaymentGateway;

use Midtrans\Snap;

class CreateTokenService extends Midtrans
{
    protected $transaksi;

    public function __construct($transaksi)
    {
        parent::__construct();
        $this->transaksi = $transaksi;
    }

    public function generateSnapToken()
    {


        try {
            $params = [
                'transaction_details' => [
                    'order_id' => $this->transaksi->order_id,
                    'gross_amount' => $this->transaksi->total,
                ],

                'customer_details' => [
                    'first_name' => $this->transaksi->tagihan->santri->nama_lengkap,
                    'last_name' => '',
                    'email' => $this->transaksi->tagihan->santri->email,
                    'phone' => $this->transaksi->tagihan->santri->no_hp,
                ],
            ];

            $token =  Snap::getSnapToken($params);

            return $token;
        }catch (\Exception $e){
            report($e);
        }

    }

}
