<!DOCTYPE html>
<html lang="id" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg"
      data-sidebar-image="none">
<head>
    <x-head/>
    @vite(['resources/js/app.js'])
    @stack('styles')
</head>

<body>
<div class="loader-wrapper">
    <span class="loader"><span class="loader-inner"></span></span>
</div>
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

    <button onclick="topFunction()" class="btn btn-light btn-icon rounded-circle" id="back-to-top">
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
<script type="text/javascript" src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>
<script src="{{asset('assets/js/plugins.js')}}"></script>
<script src="https://unpkg.com/html5-qrcode@2.0.9/dist/html5-qrcode.min.js"></script>
@livewireScripts
@stack('scripts')

<script src="{{asset('assets/libs/sweetalert2/sweetalert2.min.js')}}"></script>
<x-livewire-alert::scripts />
<script>
    Livewire.on('modalTambah', function (component) {
        $('#'+component).modal('show');
    });

    Livewire.on('modalEdit', function (component) {
        $('#' + component).modal('show');
    });
</script>
<script src="{{asset('assets/js/pages/sweetalerts.init.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
</body>
</html>
