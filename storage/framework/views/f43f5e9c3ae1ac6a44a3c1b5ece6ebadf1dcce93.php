<meta charset="utf-8"/>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta content="Platform Pendaftaran Unit Layanan Statistik" name="description"/>
<meta content="Abdul Aziz" name="author"/>
<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

<!-- App favicon -->
<link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.ico')); ?>">

<!-- Layout config Js -->
<script src="<?php echo e(asset('assets/js/layout.js')); ?>"></script>
<!-- Bootstrap Css -->
<link href="<?php echo e(asset('assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css"/>
<!-- Icons Css -->
<link href="<?php echo e(asset('assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css"/>
<!-- App Css-->
<link href="<?php echo e(asset('assets/css/app.min.css')); ?>" rel="stylesheet" type="text/css"/>
<!-- custom Css-->
<link href="<?php echo e(asset('assets/css/custom.min.css')); ?>" rel="stylesheet" type="text/css" />

<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js', 'resources/css/app.css']); ?>

<?php echo $__env->yieldPushContent('styles'); ?>

</style>

<script>
    $(window).on("load",function(){
        $(".loader-wrapper").fadeOut("slow");
    });
</script>
<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/components/head.blade.php ENDPATH**/ ?>