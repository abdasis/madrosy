<?php if (isset($component)) { $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\GuestLayout::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\GuestLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container">
        <div class="row justify-content-center align-items-center" style="min-height: 80vh">
            <div class="col-md-8">
                <div class="card border-light shadow-sm">
                    <div class="card-body text-center">
                        <i class="ri-checkbox-circle-line icon-success text-success py-0 my-0" style="font-size: 100px"></i>
                        <h3 class="">Pembayaran di Proses</h3>
                        <small class="text-muted">Tunggu sebentar kami akan informasikan lagi setelah pembayaran berhasil</small>
                    </div>
                    <div class="card-body">
                        <h5>Informasi</h5>
                        <div class="d-flex justify-content-between">
                            <div class="text-muted">Tgl. Pembayaran</div>
                            <div class="text-muted"><?php echo e(\Carbon\Carbon::parse($transaksi->waktu_transaksi)->format('d F, Y')); ?></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="text-muted">Metode Pembayaran</div>
                            <div class="text-muted"><?php echo e($transaksi->jenis_pembayaran); ?></div>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div class="text-muted">Total Pembayaran</div>
                            <div class="text-muted">Rp.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015)): ?>
<?php $component = $__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015; ?>
<?php unset($__componentOriginalc3251b308c33b100480ddc8862d4f9c79f6df015); ?>
<?php endif; ?>

<?php $__env->startPush('styles'); ?>
    <style>
        .icon-success{
            color: #4caf50;
            text-align: center;
        }
    </style>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/midtrans/pembayaran-pending.blade.php ENDPATH**/ ?>