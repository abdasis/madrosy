<meta charset="utf-8"/>
<title><?php echo e(($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->title : 'Fallback Title'); ?>

    | <?php echo e(config('app.name')); ?></title>
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

<?php echo app('Illuminate\Foundation\Vite')('resources/js/app.js'); ?>
<?php echo $__env->yieldPushContent('styles'); ?>



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

</style>

<script>
    $(window).on("load",function(){
        $(".loader-wrapper").fadeOut("slow");
    });
</script>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/components/head.blade.php ENDPATH**/ ?>