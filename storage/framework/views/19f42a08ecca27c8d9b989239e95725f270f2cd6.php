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
        <?php echo $__env->yieldPushContent('styles'); ?>
    </head>
    <body id="layout-wrapper">
        <?php if (isset($component)) { $__componentOriginal1583265dbb7476eb48291cc4ee16f12d2231241d = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Landing\Header::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('landing.header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Landing\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1583265dbb7476eb48291cc4ee16f12d2231241d)): ?>
<?php $component = $__componentOriginal1583265dbb7476eb48291cc4ee16f12d2231241d; ?>
<?php unset($__componentOriginal1583265dbb7476eb48291cc4ee16f12d2231241d); ?>
<?php endif; ?>
        <?php echo e($slot); ?>

        <script src="https://cdn.lordicon.com/xdjxvujz.js"></script>
        <script src="<?php echo e(asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/node-waves/waves.min.js')); ?>"></script>
        <script src="<?php echo e(asset('assets/libs/feather-icons/feather.min.js')); ?>"></script>
        <?php echo \Livewire\Livewire::scripts(); ?>

        <?php echo $__env->yieldPushContent('scripts'); ?>
        <script src="<?php echo e(asset('assets/libs/sweetalert2/sweetalert2.min.js')); ?>"></script>
        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'livewire-alert::components.scripts','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-alert::scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        <script src="<?php echo e(asset('assets/js/pages/sweetalerts.init.js')); ?>"></script>
    </body>
</html>
<?php /**PATH /media/aziz/Data Project/GitHub/madrosy/resources/views/layouts/guest.blade.php ENDPATH**/ ?>