<div>
    
    <div class="card">
        <div class="card-body p-4">
            <h4>Catat Konseling</h4>
            <div class="box-form mt-5">
                <div class="row">
                    <div class="col-md-8">
                        <form wire:submit.prevent="update">
                            <div class="row align-items-center gy-4">
                                <div class="col-md-3">
                                    <label for="">Nama Siswa</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <?php if (isset($component)) { $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormSelect::resolve(['name' => 'santri_id'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormSelect::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'santri_id','class' => 'form-control']); ?>
                                            <option value="">Pilih Siswa</option>
                                            <?php $__currentLoopData = $semua_siswa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $siswa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($siswa->id); ?>"><?php echo e($siswa->nama_lengkap); ?></option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6)): ?>
<?php $component = $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6; ?>
<?php unset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6); ?>
<?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="">Kasus/Pelanggaran</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <?php if (isset($component)) { $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormSelect::resolve(['name' => 'pelanggaran_id'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormSelect::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'pelanggaran_id','class' => 'form-control']); ?>
                                            <option value="">Pilih Pelanggaran</option>
                                            <?php $__currentLoopData = $semua_pelanggaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggaran): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($pelanggaran->id); ?>"><?php echo e($pelanggaran->kasus); ?> (<?php echo e($pelanggaran->bobot); ?>)</option>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6)): ?>
<?php $component = $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6; ?>
<?php unset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6); ?>
<?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for="">Tanggal</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group" wire:ignore.self>
                                        <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormInput::resolve(['name' => 'tanggal'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'tanggal','data-provider' => 'flatpickr','data-date-format' => 'd F, Y','readonly' => 'readonly','placeholder' => 'Masukan Tanggal']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                                    </div>
                                </div>

                                <div class="col-md-3">
                                    <label for=""> Keterangan </label>
                                </div>
                                <div class="col-md-9">
                                    <?php if (isset($component)) { $__componentOriginal83693b8429d83ac47ac0f5a27736a9481ab05e28 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormTextarea::resolve(['name' => 'keterangan'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormTextarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'keterangan','class' => 'form-control','rows' => '3','placeholder' => 'Masukan Layanan Konseling']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal83693b8429d83ac47ac0f5a27736a9481ab05e28)): ?>
<?php $component = $__componentOriginal83693b8429d83ac47ac0f5a27736a9481ab05e28; ?>
<?php unset($__componentOriginal83693b8429d83ac47ac0f5a27736a9481ab05e28); ?>
<?php endif; ?>
                                </div>


                                <div class="col-md-3">
                                    <label for="foto_bukti">Photo Bukti</label>
                                </div>
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormInput::resolve(['type' => 'file','name' => 'foto_buktu'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'foto_bukti','placeholder' => 'Masukan Tanggal']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                                        <?php if($errors->any()): ?>
                                            <?php $__currentLoopData = $errors->get('foto_bukti'); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <small class="text-danger"><?php echo e($error); ?></small>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        <?php endif; ?>
                                    </div>

                                    <?php if(!$errors->has('foto_bukti')): ?>
                                        <?php if($foto_bukti): ?>
                                            <img style="object-fit: contain"
                                                 class="avatar-md img-thumbnail img-fluid my-2"
                                                 src="<?php echo e($foto_bukti->temporaryUrl()); ?>">
                                        <?php elseif($preview_foto): ?>
                                            <img style="object-fit: contain"
                                                 class="avatar-md img-thumbnail img-fluid my-2"
                                                 src="<?php echo e(asset($preview_foto)); ?>">
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </div>


                                <div class="form-group d-flex justify-content-end">
                                    <button class="btn btn-success btn-border d-flex align-items-center gap-1">
                                        <i class="ri-save-line fs-16"></i>
                                        Simpan
                                    </button>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/konseling/edit.blade.php ENDPATH**/ ?>