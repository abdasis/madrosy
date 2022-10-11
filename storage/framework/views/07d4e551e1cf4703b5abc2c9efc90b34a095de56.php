<div>
    
    <h4>Laporan Absensi Semua Siswa</h4>
    <p class="text-muted">
        Data semua absensi akan di tampilkan semua pada halaman ini, silahkan pilih tanggal untuk melihat data absensi pada tanggal tersebut.
    </p>
    <div class="table-responsive">
        <table class="table table-sm table-hover bg-white">
            <thead class="bg-white">
            <tr>
                <th width="5%" class="text-center align-middle">No</th>
                <th width="20%" class="align-middle">Siswa</th>
                <?php $__currentLoopData = $data_absensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tanggal => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <th width="10%" class="text-center"><?php echo e($tanggal); ?></th>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tr>
            </thead>
            <tbody>
            <?php $__currentLoopData = $data_absensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absensi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php $__currentLoopData = $absensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="text-center"><?php echo e($loop->iteration); ?></td>
                        <td><?php echo e($value->santri->nama_lengkap); ?></td>
                        <td class="text-center">
                            <?php if($value->status == 'hadir'): ?>
                                <i class="ri-checkbox-circle-fill  text-success" data-bs-toggle="tooltip" data-bs-placement="top" title="Hadir"></i>
                            <?php elseif($value->status == 'izin'): ?>
                                <i class="ri-information-line text-warning" data-bs-toggle="tooltip" data-bs-placement="top" title="Izin"></i>
                            <?php elseif($value->status == 'sakit'): ?>
                                <i class="ri-lungs-fill text-info" data-bs-toggle="tooltip" data-bs-placement="top" title="Sakit"></i>
                            <?php else: ?>
                                <i class="ri-user-unfollow-line text-danger" data-bs-toggle="tooltip" data-bs-placement="top" title="Tidak Masuk"></i>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/presensi/laporan-presensi.blade.php ENDPATH**/ ?>