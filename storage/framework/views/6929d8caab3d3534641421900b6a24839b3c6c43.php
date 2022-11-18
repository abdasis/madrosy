<div>
    
    <div class="row">
        <div class="col-md-6">
            <div class="card rounded border-light">
                <div class="card-header border-bottom border-light">
                    <h5 class="mb-0">Detail Tagihan Siswa</h5>
                </div>
                <div class="card-body">
                    <table class="table table-borderless">
                        <tr>
                            <td>Nama Siswa</td>
                            <td>:</td>
                            <td><?php echo e($tagihan->santri->nama_lengkap); ?></td>
                        </tr>
                        <tr>
                            <td>NISN</td>
                            <td>:</td>
                            <td><?php echo e($tagihan->santri->nisn); ?></td>
                        </tr>
                        <tr>
                            <td>Kode Tagihan</td>
                            <td>:</td>
                            <td><?php echo e($tagihan->kode_tagihan); ?></td>
                        </tr>
                        <tr>
                            <td>Jenis Tagihan</td>
                            <td>:</td>
                            <td><?php echo e($tagihan->kategori->nama_kategori); ?></td>
                        </tr>
                        <tr>
                            <td>Tanggal Ditagihkan</td>
                            <td>:</td>
                            <td><?php echo e(\Carbon\Carbon::parse($tagihan->tgl_dibuat)->isoFormat('DD MMMM YYYY')); ?></td>
                        </tr>
                        <tr>
                            <td>Batas Pembayaran</td>
                            <td>:</td>
                            <td><?php echo e(\Carbon\Carbon::parse($tagihan->tgl_jatuh_tempo)->isoFormat('DD MMMM YYYY')); ?></td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td>:</td>
                            <td>Rp. <?php echo e(rupiah($tagihan->total_tagihan)); ?></td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td>:</td>
                            <td>
                                <?php if($tagihan->sisa_tagihan == 'lunas'): ?>
                                    <span class="badge badge-outline-success"><?php echo e($tagihan->sisa_tagihan); ?></span>
                                <?php elseif($tagihan->sisa_tagihan == 'belum dibayar'): ?>
                                    <span class="badge badge-outline-warning"><?php echo e($tagihan->sisa_tagihan); ?></span>
                                <?php else: ?>
                                    <span class="badge badge-soutline-danger"><?php echo e($tagihan->sisa_tagihan); ?></span>
                                <?php endif; ?>
                            </td>
                        </tr>

                        <tr>
                            <td>Keterangan</td>
                            <td>:</td>
                            <td><?php echo e($tagihan->keterangan); ?></td>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card rounded-3">
                <div class="card-header border-bottom border-light">
                    <h5>Form Terima Pembayaran</h5>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="simpan">
                        <div class="form-group mb-2" wire:ignore>
                            <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormInput::resolve(['type' => 'date','name' => 'tanggal_pembayaran','label' => 'Tanggal Pembayaran'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'tanggal_pembayaran']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                        </div>

                        <div class="form-group mb-2">
                            <?php if (isset($component)) { $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormSelect::resolve(['name' => 'metode_pembayaran','label' => 'Metode Pembayaran'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormSelect::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'metode_pembayaran']); ?>
                                <option value="">Pilih Metode Pembayaran</option>
                                <option value="Tunai">Tunai</option>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6)): ?>
<?php $component = $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6; ?>
<?php unset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6); ?>
<?php endif; ?>
                        </div>

                        <div class="form-group mb-2" wire:ignore>
                            <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormInput::resolve(['name' => '','label' => 'Jumlah Pembayaran'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'text-end','id' => 'total_pembayaran']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                        </div>

                        <div class="form-group mb-2">
                            <?php if (isset($component)) { $__componentOriginal83693b8429d83ac47ac0f5a27736a9481ab05e28 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormTextarea::resolve(['name' => 'keterangan','label' => 'Keterangan Pembayaran'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormTextarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model.defer' => 'keterangan']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal83693b8429d83ac47ac0f5a27736a9481ab05e28)): ?>
<?php $component = $__componentOriginal83693b8429d83ac47ac0f5a27736a9481ab05e28; ?>
<?php unset($__componentOriginal83693b8429d83ac47ac0f5a27736a9481ab05e28); ?>
<?php endif; ?>
                        </div>
                        <div class="form-group mb-2">
                            <button class="btn btn-primary float-end rounded">
                                <i class="ri-save-line"></i>
                                Simpan
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card rounded border-light">
                <div class="card-header border-bottom border-light">
                    <h5 class="mb-0">
                        <i class="ri-calculator-fill"></i>
                        Kalkulator Kembalian
                    </h5>
                </div>
                <div class="card-body">
                    <div class="form-group mb-2">
                        <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormInput::resolve(['name' => 'jumlah_uang_diterima','label' => 'Jumlah Uang Diterima'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'jumlah_uang_diterima']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                    </div>
                    <div class="form-group mb-2">
                        <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormInput::resolve(['name' => 'total_pembayaran','label' => 'Total Pembayaran'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'total_pembayaran','readonly' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                    </div>
                    <div class="form-group mb-2">
                        <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormInput::resolve(['name' => 'total_kembalin','label' => 'Total Kembali'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'total_kembali','readonly' => true]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->startPush('scripts'); ?>
    <script>
        var total_pembayaran = document.getElementById('total_pembayaran');
        total_pembayaran.addEventListener('keyup', (event) => {
            rupiah(total_pembayaran)
            window.livewire.find('<?php echo e($_instance->id); ?>').set('total_pembayaran', rupiah(total_pembayaran));
        })

        Livewire.onLoad(() => {
            total_pembayaran.value = modelRupiah(window.livewire.find('<?php echo e($_instance->id); ?>').total_pembayaran);
        })
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/livewire/tagihan/terima-pembayaran.blade.php ENDPATH**/ ?>