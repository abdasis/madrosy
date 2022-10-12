<div>
    
    <?php if($jadual): ?>
        <div class="alert alert-outline alert-info">
            <h5>Selamat Datang <?php echo e(auth()->user()->name); ?></h5>
            <p>Pada hari ini anda sedang mengajar di kelas <strong
                    class="text-dark"><?php echo e($jadual->kelas->nama_kelas); ?></strong> mapel <strong
                    class="text-dark"><?php echo e($jadual->mapel->nama); ?></strong> silahkan melakukan absensi siswa terlebih dahulu
            </p>
            Pelajaran di mulai dari jam <?php echo e(\Carbon\Carbon::parse($jadual->jam_mulai)->format('H:i')); ?> dan berakhir
            jam <?php echo e(\Carbon\Carbon::parse($jadual->jam_selesai)->format('H:i')); ?>

        </div>
        <div class="card border-light rounded">
            <div class="card-header border-bottom border-light">
                <h5 class="card-title mb-0">Siswa di Kelas ini</h5>
            </div>
            <div class="card-body bg-soft-light">
                <div class="d-none d-md-flex d-lg-flex p-2 gap-3 bg-white border rounded justify-content-between align-items-center">
                    <div class="col-md-1 text-center">NO</div>
                    <div class="col-md-2">Nama</div>
                    <div class="col-md-2">Nis</div>
                    <div class="col-md-3">Keterangan</div>
                    <div class="col-md-3 text-center">Absensi</div>
                </div>
                <?php $__currentLoopData = $jadual->kelas->santri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $santri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="d-md-flex d-sm-grid p-2 my-2 rounded gap-3 border justify-content-between align-items-center">
                        <div class="col-md-1 text-center"><?php echo e($loop->iteration); ?></div>
                        <div class="col-md-2 col-sm-12 text-center text-sm-center text-md-start fw-bold"><?php echo e($santri->nama_lengkap); ?></div>
                        <div class="col-md-2 col-sm-12 text-center text-sm-center text-md-start my-2 my-md-0 my-lg-0"><?php echo e($santri->nisn); ?></div>
                        <div class="col-md-3 col-sm-12 text-center text-sm-center text-md-start">
                            <?php if (isset($component)) { $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4 = $component; } ?>
<?php $component = $__env->getContainer()->make(ProtoneMedia\LaravelFormComponents\Components\FormInput::class, ['name' => 'keterangan'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form-input'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(ProtoneMedia\LaravelFormComponents\Components\FormInput::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['placeholder' => 'Keterangan','wire:model' => 'keterangan.'.e($key).'']); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4)): ?>
<?php $component = $__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4; ?>
<?php unset($__componentOriginalc6dc29918f642c0cf8bf87f6c59d196df1a6e1b4); ?>
<?php endif; ?>
                        </div>
                        <div class="col-md-3 col-sm-12 text-center">
                            <div class="my-2 my-md-0 my-lg-0">
                                <?php if($this->cekAbsen($santri->id)): ?>
                                    <?php if($this->cekAbsen($santri->id)->status == 'hadir'): ?>
                                        <button class="btn btn-success">Hadir</button>
                                        <button type="button"
                                                wire:click.prevent="batalkan(<?php echo e($this->cekAbsen($santri->id)->id); ?>)"
                                                class="btn btn-light btn-border">
                                            <i class="ri-refresh-line"></i>
                                        </button>
                                    <?php elseif($this->cekAbsen($santri->id)->status == 'izin'): ?>
                                        <button class="btn btn-warning">Izin</button>
                                        <button type="button"
                                                wire:click.prevent="batalkan(<?php echo e($this->cekAbsen($santri->id)->id); ?>)"
                                                class="btn btn-light btn-border">
                                            <i class="ri-refresh-line"></i>
                                        </button>
                                    <?php elseif($this->cekAbsen($santri->id)->status == 'sakit'): ?>
                                        <button class="btn btn-info">Sakit</button>
                                        <button type="button"
                                                wire:click.prevent="batalkan(<?php echo e($this->cekAbsen($santri->id)->id); ?>)"
                                                class="btn btn-light btn-border">
                                            <i class="ri-refresh-line"></i>
                                        </button>
                                    <?php else: ?>
                                        <button class="btn btn-danger">Alfa</button>
                                        <button type="button"
                                                wire:click.prevent="batalkan(<?php echo e($this->cekAbsen($santri->id)->id); ?>)"
                                                class="btn btn-light btn-border">
                                            <i class="ri-refresh-line"></i>
                                        </button>
                                    <?php endif; ?>
                                <?php else: ?>
                                    <div class="btn-group" role="group" aria-label="Basic example">
                                        <button type="button"
                                                wire:click.prevent="absen(<?php echo e($santri->id); ?>, 'hadir', <?php echo e($key); ?>)"
                                                class="btn btn-success">Hadir
                                        </button>
                                        <button type="button"
                                                wire:click.prevent="absen(<?php echo e($santri->id); ?>, 'izin', <?php echo e($key); ?>)"
                                                class="btn btn-warning">Izin
                                        </button>
                                        <button type="button"
                                                wire:click.prevent="absen(<?php echo e($santri->id); ?>, 'sakit', <?php echo e($key); ?>)"
                                                class="btn btn-info">Sakit
                                        </button>
                                        <button type="button"
                                                wire:click.prevent="absen(<?php echo e($santri->id); ?>, 'alpa', <?php echo e($key); ?>)"
                                                class="btn btn-danger">Alfa
                                        </button>
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    <?php else: ?>
        <div class="alert alert-outline alert-danger">
            <h5>Maaf anda tidak memiliki jadwal mengajar hari ini</h5>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/presensi/daftar-siswa.blade.php ENDPATH**/ ?>