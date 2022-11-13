<script src="<?php echo e(asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/libs/simplebar/simplebar.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/libs/node-waves/waves.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/libs/feather-icons/feather.min.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/pages/plugins/lord-icon-2.1.0.js')); ?>"></script>
<script src="<?php echo e(asset('assets/js/plugins.js')); ?>"></script>

<!-- App js -->
<script src="<?php echo e(asset('assets/js/app.js')); ?>"></script>

<script src="https://unpkg.com/html5-qrcode@2.0.9/dist/html5-qrcode.min.js"></script>
<?php echo \Livewire\Livewire::scripts(); ?>

<?php echo $__env->yieldPushContent('scripts'); ?>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'livewire-alert::components.scripts','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('livewire-alert::scripts'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<script>
    Livewire.on('modalTambah', function (component) {
        $('#' + component).modal('show');
    });

    Livewire.on('modalEdit', function (component) {
        $('#' + component).modal('show');
    });

    /*let updatedForm = false;

    Livewire.hook('element.updated', (el, component) => {
        updatedForm = true;
    })

    window.addEventListener('alert', event => {
        updatedForm = false;
    })

    window.onbeforeunload = function (e) {
        if (updatedForm == true) {
            return "Data yang dibuat belum tersimpan"
        }
    };*/

</script>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/components/scripts.blade.php ENDPATH**/ ?>