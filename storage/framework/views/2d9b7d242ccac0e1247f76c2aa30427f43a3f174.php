<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8" />
        <title>Pendaftaran Unit Layanan Statistik</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Platform Pendaftaran Unit Layanan Statistik" name="description" />
        <meta content="Abdul Aziz" name="author" />
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <!-- App favicon -->
        <link rel="shortcut icon" href="<?php echo e(asset('assets/images/favicon.ico')); ?>">

        <script src="<?php echo e(asset('assets/js/jquery-3.6.0.min.js')); ?>"></script>

        <link href="<?php echo e(asset('assets/libs/sweetalert2/sweetalert2.min.css')); ?>" rel="stylesheet" type="text/css">
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


        <!-- Scripts -->
        <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
    </head>
    <body>
        <div class="font-sans text-gray-900 antialiased">
            <?php echo e($slot); ?>

        </div>
    </body>
</html>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/layouts/guest.blade.php ENDPATH**/ ?>