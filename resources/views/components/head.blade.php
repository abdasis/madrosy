<meta charset="utf-8"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Platform Pendaftaran Unit Layanan Statistik" name="description"/>
<meta content="Abdul Aziz" name="author"/>
<meta name="csrf-token" content="{{ csrf_token() }}">

<!-- App favicon -->
<link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">

<!-- Layout config Js -->
<script src="{{asset('assets/js/layout.js')}}"></script>
<!-- Bootstrap Css -->
<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- Icons Css -->
<link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- App Css-->
<link href="{{asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css"/>
<!-- custom Css-->
<link href="{{asset('assets/css/custom.min.css')}}" rel="stylesheet" type="text/css" />

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

@vite(['resources/js/app.js', 'resources/sass/app.scss'])

@stack('styles')

</style>

<script>
    $(window).on("load",function(){
        $(".loader-wrapper").fadeOut("slow");
    });
</script>
