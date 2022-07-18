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
    @vite(['resources/js/app.js'])
    <x-head/>
    @stack('styles')
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

        <x-footer />
    </div>
    <!-- end main content-->

    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
</div>
<!-- END layout-wrapper -->
<!-- JAVASCRIPT -->
<script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{asset('assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{asset('assets/js/pages/sweetalerts.init.js')}}"></script>
<!-- App js -->
<script src="{{asset('assets/js/app.js')}}"></script>
@livewireScripts
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<x-livewire-alert::scripts />
@stack('scripts')

</body>

</html>
