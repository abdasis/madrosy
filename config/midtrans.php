<?php
return [
        // Set your Merchant Server Key
        'server_key' => \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY', ''),
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        'env' => \Midtrans\Config::$isProduction = env('MIDTRANS_ENV', false),
        // Set sanitization on (default)
        'sanitize' => \Midtrans\Config::$isSanitized = env('MIDTRANS_SANITIZED', true),
        // Set 3DS transaction for credit card to true
        '3ds' => \Midtrans\Config::$is3ds = env('MIDTRANS_3DS', true)
    ]

?>
