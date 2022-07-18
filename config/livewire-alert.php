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
        'showConfirmButton' => false
    ],
    'confirm' => [
        'icon' => 'warning',
        'position' => 'center',
        'toast' => false,
        'timer' => null,
        'showConfirmButton' => true,
        'showCancelButton' => true,
        'cancelButtonText' => 'No',
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
            'confirmButton' => '',
            'denyButton' => 'btn btn-danger btn-border',
            'cancelButton' => 'btn btn-danger btn-border',
            'loader' => '',
            'footer' => '',
            'text' => 'fs-12',
        ]
    ],
];
