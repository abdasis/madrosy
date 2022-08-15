<div>
    
    <div class="card">
        <div class="card-header border-bottom-dashed">
            <h4 class="card-title mb-0">
                Buka Rekening Baru
            </h4>
        </div>
        <div class="card-body py-3">
            <div class="row">
                <div class="col-md-6">
                    <form wire:submit.prevent="simpan">
                        <div class="form-group mb-3">
                            <?php if (isset($component)) { $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6 = $component; } ?>
<?php $component = $__env->getContainer()->make(ProtoneMedia\LaravelFormComponents\Components\FormSelect::class, ['name' => 'santri_id','label' => 'Nama Santri'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormSelect::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'santri_id']); ?>
                                <option value="">Pilih Santri</option>
                                <?php $__currentLoopData = $semua_santri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $santri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($santri->id); ?>"><?php echo e($santri->nama_lengkap); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6)): ?>
<?php $component = $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6; ?>
<?php unset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6); ?>
<?php endif; ?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nomor Rekening</label>
                            <div class="form-icon">
                                <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = $__env->getContainer()->make(ProtoneMedia\LaravelFormComponents\Components\FormInput::class, ['name' => 'nomor_rekening'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'nomor_rekening','class' => 'form-control form-control-icon','id' => 'iconInput','placeholder' => '38489368685']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                                <i class="ri-bank-card-2-line"></i>
                            </div>
                            <small class="text-muted">* Reload (Ctrl+R) untuk mendapatkan nomor rekening baru</small>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Jenis Rekening</label>
                            <div class="d-flex align-items-center gap-3">
                                <?php if (isset($component)) { $__componentOriginal4dfc86186639557ee3c4d80cf5aaa304c2eca2ae = $component; } ?>
<?php $component = $__env->getContainer()->make(ProtoneMedia\LaravelFormComponents\Components\FormRadio::class, ['label' => 'Harian','value' => 'harian','name' => 'jenis_rekening'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormRadio::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'jenis_rekening','id' => 'harian','checked' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4dfc86186639557ee3c4d80cf5aaa304c2eca2ae)): ?>
<?php $component = $__componentOriginal4dfc86186639557ee3c4d80cf5aaa304c2eca2ae; ?>
<?php unset($__componentOriginal4dfc86186639557ee3c4d80cf5aaa304c2eca2ae); ?>
<?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginal4dfc86186639557ee3c4d80cf5aaa304c2eca2ae = $component; } ?>
<?php $component = $__env->getContainer()->make(ProtoneMedia\LaravelFormComponents\Components\FormRadio::class, ['label' => 'Tabungan','value' => 'tabungan','name' => 'jenis_rekening'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormRadio::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'jenis_rekening','id' => 'tabungan','checked' => '']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4dfc86186639557ee3c4d80cf5aaa304c2eca2ae)): ?>
<?php $component = $__componentOriginal4dfc86186639557ee3c4d80cf5aaa304c2eca2ae; ?>
<?php unset($__componentOriginal4dfc86186639557ee3c4d80cf5aaa304c2eca2ae); ?>
<?php endif; ?>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Limit Harian</label>
                            <div class="form-icon">
                                <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = $__env->getContainer()->make(ProtoneMedia\LaravelFormComponents\Components\FormInput::class, ['showErrors' => false,'name' => 'limit_harian'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'limit_harian','class' => 'form-control form-control-icon','id' => 'iconInput','placeholder' => '10000']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                                <i class=" ri-secure-payment-line"></i>
                            </div>
                            <?php $__errorArgs = ['limit_harian'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger">
                                <?php echo e($message); ?>

                            </small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="form-group mb-3">
                            <label for="">Passcode</label>
                            <div class="form-icon">
                                <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = $__env->getContainer()->make(ProtoneMedia\LaravelFormComponents\Components\FormInput::class, ['type' => 'password','name' => 'passcode','showErrors' => false] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-control-icon','wire:model' => 'passcode','placeholder' => '123456','maxlength' => '6']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                                <i class="ri-lock-2-line"></i>
                            </div>
                            <?php $__errorArgs = ['passcode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger">
                                <?php echo e($message); ?>

                            </small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Konfirmasi Passcode</label>
                            <div class="form-icon">
                                <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = $__env->getContainer()->make(ProtoneMedia\LaravelFormComponents\Components\FormInput::class, ['type' => 'password','showErrors' => false,'name' => 'passcode_confirmation'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-control-icon','wire:model' => 'passcode_confirmation','placeholder' => '123456','maxlength' => '6']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                                <i class="ri-lock-2-line"></i>
                            </div>
                            <?php $__errorArgs = ['passcode_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <small class="text-danger">
                                <?php echo e($message); ?>

                            </small>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        <div class="form-group mb-3">
                            <button class="btn btn-success btn-border rounded-3 float-end">
                                <i class="ri-save-line"></i>
                                <span>Simpan</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/rekening/tambah.blade.php ENDPATH**/ ?>