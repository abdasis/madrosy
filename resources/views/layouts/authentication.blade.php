<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="dark" data-sidebar-size="lg">
<head>

    <meta charset="utf-8" />
    <title>Sign In | Aplikasi Management Pondok Pesantren</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <meta content="{{csrf_token()}}" name="csrf-token" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ secure_asset('assets/images/favicon.ico')}}">

    <!-- Bootstrap Css -->
    <link href="{{ secure_asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ secure_asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ secure_asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ secure_asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />


</head>

<body>

<!-- auth-page wrapper -->
<div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="bg-overlay"></div>
    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden pt-lg-5">
        {{$slot}}
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0">&copy;
                            {{now()->year}} Madrosy, Develop By <a href="https://www.instagram.com/idabdasis/" class="fw-bold text-white" target="_blank">Abdul Aziz</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->

<!-- JAVASCRIPT -->
<script src="{{ secure_asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{ secure_asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{ secure_asset('assets/libs/node-waves/waves.min.js')}}"></script>
<script src="{{ secure_asset('assets/libs/feather-icons/feather.min.js')}}"></script>
<script src="{{ secure_asset('assets/js/pages/plugins/lord-icon-2.1.0.js')}}"></script>
<script src="{{ secure_asset('assets/js/plugins.js')}}"></script>

</body>
</html>
