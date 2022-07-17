<!DOCTYPE html>
<html lang="id" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
      data-sidebar-image="none">

<head>
    <meta charset="utf-8" />
    <title>{{ ($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->title : 'Fallback Title' }} | Pendaftaran Unit Layanan Statistik</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Platform Pendaftaran Unit Layanan Statistik" name="description" />
    <meta content="Abdul Aziz" name="author" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{secure_asset('assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{secure_asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{secure_asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{secure_asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{secure_asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />
    @vite(['resources/js/app.js'])
    <script src="https://cdn.tiny.cloud/1/3kubek8r1p1mz4kvit7hc1z2mxd8wgg551cbeu82qkmenprf/tinymce/6/tinymce.min.js"
            referrerpolicy="origin"></script>
    <style>
        [x-cloak] { display: none !important; }
    </style>
</head>

<body>
<!-- Begin page -->
<div id="layout-wrapper">
    <x-header />
    <!-- ========== App Menu ========== -->
    <x-navbar />
    <!-- Left Sidebar End -->
    <!-- Vertical Overlay-->
    <div class="vertical-overlay"></div>

    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <!-- start page title -->
                <div class="row">
                    <div class="col-12">
                        {{ Breadcrumbs::render() }}
                    </div>
                </div>
                <!-- end page title -->


                <div class="row">
                    <div class="col">
                        <div class="h-100">
                            {{$slot}}
                        </div>
                        <!-- end .h-100-->
                    </div>
                    <!-- end col -->
                </div>
            </div>
            <!-- container-fluid -->
        </div>
        <!-- End Page-content -->

        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <script>
                            document.write(new Date().getFullYear());
                        </script>
                        © Madrosy.
                    </div>
                    <div class="col-sm-6">
                        <div class="text-sm-end d-none d-sm-block">
                            Design & Develop by <a class="fw-bold" href="https://facebook.com/lazizdev">Abdul
                                Aziz</a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- end main content-->

    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
</div>
<!-- END layout-wrapper -->
<!-- JAVASCRIPT -->
<script src="{{secure_asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{secure_asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{secure_asset('assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{secure_asset('assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{secure_asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<!-- App js -->
<script src="{{secure_asset('assets/js/app.js')}}"></script>
@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />
@stack('scripts')
</body>

</html>
