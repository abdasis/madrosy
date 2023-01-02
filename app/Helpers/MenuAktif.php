<?php

function expand($route = '')
{

    $status = '';
    if (request()->is($route)) {
        $status = 'true show';
    } else {
        $status = 'gagal';
    }
    return $status;
}

function menuAktif($url)
{
    if (url()->current() == $url) {
        $status = 'active';
    } else {
        $status = $url;
    }

    return $status;
}
