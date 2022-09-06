<?php

namespace App\Services\PaymentGateway;

use App\Models\Transaksi;
use Carbon\Carbon;
use Midtrans\Snap;

class CreateTokenService extends Midtrans
{
    protected $tagihan;

    public function __construct($tagihan)
    {
        parent::__construct();
        $this->tagihan = $tagihan;
    }

    public function generateSnapToken()
    {
        $params = [
            'transaction_details' => [
                'order_id' => $this->tagihan->kode_tagihan,
                'gross_amount' => $this->tagihan->total_tagihan,
            ],

            'customer_details' => [
                'first_name' => $this->tagihan->santri->nama_lengkap,
                'last_name' => '',
                'email' => $this->tagihan->santri->email,
                'phone' => $this->tagihan->santri->no_hp,
            ],
        ];

        try {
            $token =  Snap::getSnapToken($params);
            return $token;
        }catch (\Exception $e){
            return $e;
        }

    }

}
