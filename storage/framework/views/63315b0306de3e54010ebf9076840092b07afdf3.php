<div>
    
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header border-bottom border-light">
                    <h5 class="mb-0">
                        Pengaturan Data Instansi
                    </h5>
                </div>
                <div class="card-body bg-soft-light py-4">
                    <div class="widget-title my-3">
                        <h5 class="text-success fw-bold align-items-center d-flex gap-2">
                            <i class="ri-home-5-line"></i>
                            Tentang Sekolah
                        </h5>
                        <p class="text-muted">
                            Kamu bisa mengubah nama instansi, dan status pada halaman ini.
                        </p>
                    </div>
                    <div class="form-group my-2">
                        <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormInput::resolve(['name' => 'nama_sekolah','label' => 'Nama Sekolah'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'nama_sekolah','placeholder' => 'Masukan nama sekolah']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group my-2">
                                <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormInput::resolve(['name' => 'no_statistik','label' => 'Nomor Statistik'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Masukan No. Statistik','wire:model' => 'no_statistik']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group my-2">
                                <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormInput::resolve(['name' => 'no_sk','label' => 'Nomor Surat Keputusan'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Masukan No. SK','wire:model' => 'no_sk']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group my-2">
                                <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormInput::resolve(['name' => 'tanggal_sk','label' => 'Tanggal Surat Keputusan','type' => 'date'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Masukan No. SK','wire:model' => 'tanggal_sk']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="widget-title my-3">
                        <h5 class="text-success fw-bold align-items-center d-flex gap-2">
                            <i class="ri-map-line"></i>
                            Alamat
                        </h5>
                        <p class="text-muted">
                            Masukan alamat lengkap dari sekolah yang sedang kamu kelola
                        </p>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group my-2">
                                    <?php if (isset($component)) { $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormSelect::resolve(['name' => 'provinsi','label' => 'Provinsi'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormSelect::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'provinsi']); ?>
                                        <option value="">Pilih Provinsi</option>
                                        <?php $__currentLoopData = $data_provinsi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $provinsi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($provinsi->code); ?>"><?php echo e($provinsi->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6)): ?>
<?php $component = $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6; ?>
<?php unset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6); ?>
<?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group my-2">
                                    <?php if (isset($component)) { $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormSelect::resolve(['name' => 'provinsi','label' => 'Provinsi'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormSelect::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                        <option value="">Pilih Provinsi</option>
                                        <?php $__currentLoopData = $data_kabupaten; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kabupaten): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <option value="<?php echo e($kabupaten->code); ?>"><?php echo e($kabupaten->name); ?></option>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6)): ?>
<?php $component = $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6; ?>
<?php unset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6); ?>
<?php endif; ?>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group my-2">
                                    <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormInput::resolve(['name' => 'tanggal_sk','label' => 'Tanggal Surat Keputusan','type' => 'date'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Masukan No. SK','wire:model' => 'tanggal_sk']); ?>
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
        </div>
    </div>
</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/setting/data-instansi.blade.php ENDPATH**/ ?>