<meta charset="utf-8" />
<title>{{ ($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->title : 'Fallback Title' }} | Pendaftaran Unit Layanan Statistik</title>
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


<style>
    .loader-wrapper {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-color: #F3F3F9;
        z-index: 99999;
        overflow: hidden;
    }

    .sidebar-loading{
        min-height: 100vh;
        min-width: 250px;
        max-width: 265px;
    }

    .footer {
        bottom: 0;
        position: absolute;
        right: 0;
        color: var(--vz-footer-color);
        left: 250px !important;
        height: 60px;
        background-color: var(--vz-footer-bg);
    }


</style>

<script>
    $(window).on("load",function(){
        $(".loader-wrapper").fadeOut("slow");
    });
</script>
