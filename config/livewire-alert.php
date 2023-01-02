<?php

/*
 * For more details about the configuration, see:
 * https://sweetalert2.github.io/#configuration
 */
return [
    'alert' => [
        'position' => 'top-end',
        'timer' => 3000,
        'toast' => true,
        'text' => null,
        'showCancelButton' => false,
        'showConfirmButton' => false,
        'background' => '#fff',
        'timerProgressBar' => true,
        'customClass' => [

        ]
    ],
    'confirm' => [
        'icon' => 'warning',
        'position' => 'center',
        'toast' => false,
        'timer' => null,
        'showConfirmButton' => true,
        'showCancelButton' => true,
        'cancelButtonText' => 'Batal',
        'confirmButtonText' => 'Ya, Yakin',
        'confirmButtonColor' => '#0AB39C',
        'cancelButtonColor' => '#F06548',
        'customClass' => [
            'container' => '',
            'popup' => '',
            'header' => '',
            'title' => 'fw-bolder',
            'closeButton' => '',
            'icon' => '',
            'image' => '',
            'content' => 'fs-12',
            'htmlContainer' => '',
            'input' => '',
            'inputLabel' => '',
            'validationMessage' => '',
            'actions' => '',
            'confirmButton' => 'btn btn-success btn-border',
            'denyButton' => 'btn btn-danger btn-border',
            'cancelButton' => 'btn btn-danger btn-border',
            'loader' => '',
            'footer' => '',
            'text' => 'fs-12',
        ]
    ],
];
