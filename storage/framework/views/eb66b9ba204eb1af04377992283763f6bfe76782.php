<meta charset="utf-8" />
<title><?php echo e(($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->title : 'Fallback Title'); ?> | Pendaftaran Unit Layanan Statistik</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Platform Pendaftaran Unit Layanan Statistik" name="description" />
<meta content="Abdul Aziz" name="author" />
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<!-- App favicon -->
<link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.ico')); ?>">

<!-- Layout config Js -->
<script src="<?php echo e(asset('assets/js/layout.js')); ?>"></script>
<!-- Bootstrap Css -->
<link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" />
<!-- Icons Css -->
<link href="<?php echo e(asset('assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
<!-- App Css-->
<link href="<?php echo e(asset('assets/css/app.min.css')); ?>" rel="stylesheet" type="text/css" />
<!-- custom Css-->
<link href="<?php echo e(asset('assets/css/custom.min.css')); ?>" rel="stylesheet" type="text/css" />

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

<style>
    .loader-wrapper {
        width: 100%;
        height: 100%;
        position: absolute;
        top: 0;
        left: 0;
        background-color: rgb(0,106,79);
        display:flex;
        justify-content: center;
        align-items: center;
        z-index: 99999;
        overflow: hidden;
    }
    .loader {
        display: inline-block;
        width: 30px;
        height: 30px;
        position: relative;
        border: 4px solid #Fff;
        animation: loader 2s infinite ease;
    }
    .loader-inner {
        vertical-align: top;
        display: inline-block;
        width: 100%;
        background-color: #fff;
        animation: loader-inner 2s infinite ease-in;
    }

    @keyframes  loader {
        0% { transform: rotate(0deg);}
        25% { transform: rotate(180deg);}
        50% { transform: rotate(180deg);}
        75% { transform: rotate(360deg);}
        100% { transform: rotate(360deg);}
    }

    @keyframes  loader-inner {
        0% { height: 0%;}
        25% { height: 0%;}
        50% { height: 100%;}
        75% { height: 100%;}
        100% { height: 0%;}
    }
</style>

<script>
    $(window).on("load",function(){
        $(".loader-wrapper").fadeOut("slow");
    });
</script>
<?php /**PATH E:\GitHub\madrosy\resources\views/components/head.blade.php ENDPATH**/ ?>