<!doctype html>
<html lang="en"
      data-layout="vertical"
      data-topbar="light"
      data-sidebar-size="lg"
      data-sidebar-image="true"
      data-preloader="disable"
      data-layout-mode="<?php echo e($preferensi->mode_aplikasi ?? 'light'); ?>"
      data-layout-width="fluid"
      data-layout-position="fixed"
      data-layout-style="default">
<head>
    <title><?php echo e(($breadcrumb = Breadcrumbs::current()) ? $breadcrumb->title : 'Fallback Title'); ?>

        | <?php echo e(config('app.name')); ?> </title>
    <?php if (isset($component)) { $__componentOriginal0ffb0a0d50d0f581dbd60338c0b56c81fed4e7d6 = $component; } ?>
<?php $component = App\View\Components\Head::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('head'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Head::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal0ffb0a0d50d0f581dbd60338c0b56c81fed4e7d6)): ?>
<?php $component = $__componentOriginal0ffb0a0d50d0f581dbd60338c0b56c81fed4e7d6; ?>
<?php unset($__componentOriginal0ffb0a0d50d0f581dbd60338c0b56c81fed4e7d6); ?>
<?php endif; ?>
</head>
<body>
<div id="layout-wrapper">
    <?php if (isset($component)) { $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3 = $component; } ?>
<?php $component = App\View\Components\Header::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('header'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Header::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3)): ?>
<?php $component = $__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3; ?>
<?php unset($__componentOriginal99db13291ff287454d08b974e14dad64f9e2c6f3); ?>
<?php endif; ?>
    <?php if (isset($component)) { $__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c = $component; } ?>
<?php $component = App\View\Components\Navbar::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('navbar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Navbar::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c)): ?>
<?php $component = $__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c; ?>
<?php unset($__componentOriginal08d9d46900ea68d5dc06d8728734a2fd47ca153c); ?>
<?php endif; ?>
    <div class="main-content">
        <div class="page-content">
            <div class="container-fluid">
                <?php echo e(Breadcrumbs::render()); ?>

                <?php echo e($slot); ?>

            </div>
        </div>
        <?php if (isset($component)) { $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf = $component; } ?>
<?php $component = App\View\Components\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Footer::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf)): ?>
<?php $component = $__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf; ?>
<?php unset($__componentOriginal88b1957f21f7f49b400717e8d0a27189798132bf); ?>
<?php endif; ?>
    </div>
</div>
<button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
    <i class="ri-arrow-up-line"></i>
</button>
<?php if (isset($component)) { $__componentOriginal45978a64031dbad80252365e887abcc2039b13c6 = $component; } ?>
<?php $component = App\View\Components\Scripts::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Scripts::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal45978a64031dbad80252365e887abcc2039b13c6)): ?>
<?php $component = $__componentOriginal45978a64031dbad80252365e887abcc2039b13c6; ?>
<?php unset($__componentOriginal45978a64031dbad80252365e887abcc2039b13c6); ?>
<?php endif; ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('mode-aplikasi', [])->html();
} elseif ($_instance->childHasBeenRendered('qhjWMaS')) {
    $componentId = $_instance->getRenderedChildComponentId('qhjWMaS');
    $componentTag = $_instance->getRenderedChildComponentTagName('qhjWMaS');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('qhjWMaS');
} else {
    $response = \Livewire\Livewire::mount('mode-aplikasi', []);
    $html = $response->html();
    $_instance->logRenderedChild('qhjWMaS', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php echo $__env->yieldPushContent('scripts'); ?>
</body>
</html>
<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/layouts/app.blade.php ENDPATH**/ ?>