<div>
    
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-between align-items-center">
                <div class="col-md-6">
                    <form wire:submit.prevent="simpan">
                        <div class="form-group mb-3">
                            <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormInput::resolve(['type' => 'text','name' => 'nama_kategori','label' => 'Nama Kategori'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'nama_kategori','placeholder' => 'e.g: Daftar Ulang']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                        </div>
                        <div class="form-group mb-3">
                            <?php if (isset($component)) { $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormSelect::resolve(['name' => 'tahun_ajaran_id','label' => 'Tahun Ajaran'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormSelect::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'tahun_ajaran_id']); ?>
                                <option value="">Pilih Jenis Tagihan</option>
                                <?php $__currentLoopData = $semua_tahun_ajaran; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tahun): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <option value="<?php echo e($tahun->id); ?>"><?php echo e($tahun->tahun_awal); ?>/<?php echo e($tahun->tahun_akhir); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6)): ?>
<?php $component = $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6; ?>
<?php unset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6); ?>
<?php endif; ?>
                        </div>
                        <div class="form-group mb-3">
                            <?php if (isset($component)) { $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormSelect::resolve(['name' => 'jenis_tagihan','label' => 'Jenis Tagihan'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormSelect::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'jenis_tagihan']); ?>
                                <option value="">Pilih Jenis Tagihan</option>
                                <option value="bulanan">Bulanan</option>
                                <option value="tahunan">Tahunan</option>
                                <option value="insidental">Insidental</option>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6)): ?>
<?php $component = $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6; ?>
<?php unset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6); ?>
<?php endif; ?>
                        </div>
                        <div class="form-group mb-3">
                            <?php if (isset($component)) { $__componentOriginald1f13da497a560b93acf14fa52cf02e2bfad8a40 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormGroup::resolve(['name' => 'cicilan','label' => 'Pembayaran bisa di angsur?'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-group'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormGroup::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                                <?php if (isset($component)) { $__componentOriginal4dfc86186639557ee3c4d80cf5aaa304c2eca2ae = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormRadio::resolve(['name' => 'cicilan','value' => '1','label' => 'Ya, Bisa'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormRadio::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'cicilan']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4dfc86186639557ee3c4d80cf5aaa304c2eca2ae)): ?>
<?php $component = $__componentOriginal4dfc86186639557ee3c4d80cf5aaa304c2eca2ae; ?>
<?php unset($__componentOriginal4dfc86186639557ee3c4d80cf5aaa304c2eca2ae); ?>
<?php endif; ?>
                                <?php if (isset($component)) { $__componentOriginal4dfc86186639557ee3c4d80cf5aaa304c2eca2ae = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormRadio::resolve(['name' => 'cicilan','value' => '0','label' => 'Tidak'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-radio'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormRadio::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['wire:model' => 'cicilan']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal4dfc86186639557ee3c4d80cf5aaa304c2eca2ae)): ?>
<?php $component = $__componentOriginal4dfc86186639557ee3c4d80cf5aaa304c2eca2ae; ?>
<?php unset($__componentOriginal4dfc86186639557ee3c4d80cf5aaa304c2eca2ae); ?>
<?php endif; ?>
                             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginald1f13da497a560b93acf14fa52cf02e2bfad8a40)): ?>
<?php $component = $__componentOriginald1f13da497a560b93acf14fa52cf02e2bfad8a40; ?>
<?php unset($__componentOriginald1f13da497a560b93acf14fa52cf02e2bfad8a40); ?>
<?php endif; ?>
                        </div>
                        <div class="form-gorup mb-3">
                            <?php if (isset($component)) { $__componentOriginal83693b8429d83ac47ac0f5a27736a9481ab05e28 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormTextarea::resolve(['name' => 'keterangan','label' => 'Keterangan'] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-textarea'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormTextarea::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Masukan keterangan tagihan','wire:model' => 'keterangan']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal83693b8429d83ac47ac0f5a27736a9481ab05e28)): ?>
<?php $component = $__componentOriginal83693b8429d83ac47ac0f5a27736a9481ab05e28; ?>
<?php unset($__componentOriginal83693b8429d83ac47ac0f5a27736a9481ab05e28); ?>
<?php endif; ?>
                        </div>
                        <div class="form-group mb-3">
                            <button
                                class="btn btn btn-success waves-effect waves-light d-flex align-items-center gap-1 btn-border float-end">
                                <i class="ri-save-line"></i>
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-5">
                    <div class="alert alert-secondary fade show" role="alert">
                        <i class="ri-question-line align-middle fs-16"></i> Bantuan <br>
                        <ul>
                            <li>Nama Kategori Sesuaikan dengan Nama Tagihan yang akan dibuat, e.g <strong>Daftar Ulang</strong></li>
                            <li>Pilih tahun ajaran yang sedang aktif saat ini</li>
                            <li>Jenis tagihan bisa kamu pilih sesuaikan dengan kebutuhan dari tagihan, misal untuk SPP di set ke bulanan</li>
                            <li>Pembayarna yang bisa di angsur, kamu bisa mengirim tagihan nantinya sesuai yang ingin dibayarkan oleh wali murid</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/livewire/kategori-tagihan/tambah.blade.php ENDPATH**/ ?>