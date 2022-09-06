<?php

namespace App\Services\PaymentGateway;

use App\Models\Transaksi;
use Carbon\Carbon;
use Midtrans\Config;

class Midtrans
{

    protected $serverKey;
    protected $isProduction;
    protected $isSanitized;
    protected $is3ds;

    public function __construct()
    {
        $this->serverKey = config('midtrans.server_key');
        $this->isProduction = config('midtrans.env');
        $this->isSanitized = config('midtrans.sanitize');
        $this->is3ds = config('midtrans.3ds');
        $this->_configureMidtrans();
    }

    public function _configureMidtrans()
    {
        Config::$serverKey = $this->serverKey;
        Config::$isProduction = $this->isProduction;
        Config::$isSanitized = $this->isSanitized;
        Config::$is3ds = $this->is3ds;
    }

}
