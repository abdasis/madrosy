<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <title>Pendaftaran Unit Layanan Statistik</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Platform Pendaftaran Unit Layanan Statistik" name="description" />
        <meta content="Abdul Aziz" name="author" />
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

        <script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>

        <link href="{{asset('assets/libs/sweetalert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Layout config Js -->
        <script src="{{asset('assets/js/layout.js')}}"></script>
        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- custom Css-->
        <link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />


        <!-- Scripts -->
        @vite(['resources/js/app.js'])
        @stack('styles')
    </head>
    <body id="layout-wrapper">
        <div class="font-sans text-gray-900 antialiased">
            {{ $slot }}
        </div>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
        <script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
        @livewireScripts
        @stack('scripts')
        <script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
        <x-livewire-alert::scripts />
        <script src="{{asset('assets/js/pages/sweetalerts.init.js')}}"></script>
    </body>
</html>
