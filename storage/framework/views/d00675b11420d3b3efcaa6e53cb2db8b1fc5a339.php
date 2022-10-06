<div>
    
    <h4>Laporan Absensi Semua Siswa</h4>
    <p class="text-muted">
        Data semua absensi akan di tampilkan semua pada halaman ini, silahkan pilih tanggal untuk melihat data absensi pada tanggal tersebut.
    </p>
    <table class="table table-sm table-hover">
        <thead class="table-light">
        <tr>
            <th class="align-middle" rowspan="2">No</th>
            <th class="align-middle" rowspan="2">Siswa</th>
            <th class="align-middle text-center" colspan="6">Hari</th>
            <th class="text-start align-middle" rowspan="2">Keterangan</th>
        </tr>
        <tr>
            <th>Senin</th>
            <th>Selasa</th>
            <th>Rabu</th>
            <th>Kamis</th>
            <th>Jum'at</th>
            <th>Sabtu</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $data_santri; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $santri): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($loop->iteration); ?></td>
                <td><?php echo e($santri->nama_lengkap); ?></td>
                <?php $__currentLoopData = $santri->data_absensi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $absensi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <td><?php echo e($absensi->status); ?></td>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <td>Keterangan</td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</div>
<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/prensensi/laporan-presensi.blade.php ENDPATH**/ ?>