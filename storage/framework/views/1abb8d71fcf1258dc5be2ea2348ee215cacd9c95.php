<div>
    
    <div class="card">
        <div class="card-body mt-3">

            <?php if($data_jadwal): ?>
               
                <table class="table table-sm">
                    <thead>
                    <tr>
                        <th rowspan="2" class="align-middle">No.</th>
                        <th rowspan="2" class="align-middle">Nama Siswa</th>
                        <th colspan="<?php echo e(count($data_jadwal[0]['data_absensi'])); ?>"  class="text-center">Data Absensi</th>
                        <th colspan="4" class="text-center">Total</th>
                    </tr>
                    <tr>
                        <?php $__currentLoopData = $data_jadwal[0]['data_absensi']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absensi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <th class="text-center"><?php echo e($absensi['tanggal']); ?></th>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <th class="text-center">Hadir</th>
                        <th class="text-center">Izin</th>
                        <th class="text-center">Sakit</th>
                        <th class="text-center">Alpa</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $__currentLoopData = $data_jadwal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <td><?php echo e($jadwal['santri']); ?></td>
                            <?php $__currentLoopData = $jadwal['data_absensi']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absensi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <td class="text-center">
                                    <?php if($absensi['status'] == 'hadir'): ?>
                                        <i class="ri-checkbox-circle-line text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo e($absensi['status']); ?>"></i>
                                    <?php elseif($absensi['status'] == 'sakit'): ?>
                                        <i class="ri-add-box-fill text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo e($absensi['status']); ?>"></i>
                                    <?php elseif($absensi['status'] == 'izin'): ?>
                                        <i class="ri-information-line text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo e($absensi['status']); ?>"></i>
                                    <?php elseif($absensi['status'] == 'alpa'): ?>
                                        <i class=" ri-close-circle-line text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="<?php echo e($absensi['status']); ?>"></i>
                                    <?php endif; ?>
                                </td>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <td class="text-center"><?php echo e($jadwal['total_hadir']); ?></td>
                            <td class="text-center"><?php echo e($jadwal['total_izin']); ?></td>
                            <td class="text-center"><?php echo e($jadwal['total_sakit']); ?></td>
                            <td class="text-center"><?php echo e($jadwal['total_alpa']); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                </table>
            <?php else: ?>
                <div class="alert alert-info text-center">
                    <?php echo e(Str::title("lakukan login dikelas untuk melihat presensi siswa")); ?>

                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/presensi/isi-laporan.blade.php ENDPATH**/ ?>