<div>
    
    <div class="card">
        <div class="card-header bg-white border-bottom border-light d-flex align-items-center">
            <h5 class="mb-0 flex-grow-1">Data Semua Jadwal</h5>
            <div class="filter-kelas">
                <?php if (isset($component)) { $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6 = $component; } ?>
<?php $component = ProtoneMedia\LaravelFormComponents\Components\FormSelect::resolve(['name' => ''] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-select'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormSelect::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'form-select-sm','wire:model' => 'kelas']); ?>
                    <option value="">Filter Perkelas</option>
                    <?php $__currentLoopData = $data_kelas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $kelas): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($kelas->id); ?>"><?php echo e($kelas->nama_kelas); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6)): ?>
<?php $component = $__componentOriginale3e27020619c7dd176dc386b70690b75269969a6; ?>
<?php unset($__componentOriginale3e27020619c7dd176dc386b70690b75269969a6); ?>
<?php endif; ?>
            </div>
        </div>
        <div class="card-body bg-soft-light">
            <h3 class="text-center my-3">Berikut Data Jadwal Pelajaran Kelas <div class="badge badge-outline-success"><?php echo e($nama_kelas); ?></div></h3>
            <div class="row justify-content-between">
                <?php $__empty_1 = true; $__currentLoopData = $data_jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $jadwals): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="col-md-6">
                        <div class="card shadow-none border border-light rounded">
                            <div class="card-header bg-soft-light border-bottom border-light"><h5 class="mb-0"><?php echo e($key); ?></h5></div>
                            <div class="card-body bg-soft-light">
                                <table class="table table-sm">
                                    <thead>
                                    <tr>
                                        <th>Jam</th>
                                        <th>Mata Pelajaran</th>
                                        <th>Guru</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php $__currentLoopData = $jadwals; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwals): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td class="align-middle"><?php echo e($loop->iteration); ?></td>
                                            <td class="align-middle"><?php echo e($jadwals->mapel->nama); ?></td>
                                            <td class="align-middle"><?php echo e($jadwals->guru->nama); ?></td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <div class="col-md-12">
                        <div class="alert alert-danger text-center">Data Jadwal Belum Tersedia</div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/jadwal/perminggu.blade.php ENDPATH**/ ?>