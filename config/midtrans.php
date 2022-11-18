<?php

    $environment = env('MIDTRANS_ENV');

    if ($environment == 'production'){
        $is_production = true;
    }else{
        $is_production = false;
    }

    return [
        // Set your Merchant Server Key
        'server_key' => \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY', ''),
        // Set your Merchant Server Key
        'client_key' => env('MIDTRANS_CLIENT_KEY', ''),
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        'env' => \Midtrans\Config::$isProduction = $is_production,
        // Set sanitization on (default)
        'sanitize' => \Midtrans\Config::$isSanitized = env('MIDTRANS_SANITIZED', true),
        // Set 3DS transaction for credit card to true
        '3ds' => \Midtrans\Config::$is3ds = env('MIDTRANS_3DS', true),

        // Optional
        'midtrans_url' => env('MIDTRANS_URL', 'https://api.sandbox.midtrans.com/v2/'),

        'midtrans_snap_url' => env('MIDTRANS_SNAP_URL', 'https://app.sandbox.midtrans.com/snap/snap.js'),
    ]
?>
