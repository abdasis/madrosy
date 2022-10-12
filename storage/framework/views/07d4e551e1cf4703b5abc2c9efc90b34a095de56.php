<div>
    
    <div class="row gy-3">
        <?php $__currentLoopData = $data_mapel; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mapel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <!-- Ribbon Shape -->
                <div class="card ribbon-box border shadow-none mb-lg-0">
                    <div class="card-body">
                        <div class="ribbon ribbon-primary ribbon-shape"><?php echo e($mapel->kelas->nama_kelas); ?></div>
                        <h5 class="fs-14 text-end"><?php echo e(Str::limit($mapel->mapel->nama,20)); ?></h5>
                        <div class="ribbon-content text-muted mt-4">
                            <table class="table table-sm">
                                <tr>
                                    <td>Senin</td>
                                    <td>:</td>
                                    <td><?php echo e($mapel->hari); ?></td>
                                </tr>
                                <tr>
                                    <td>Jam Mulai</td>
                                    <td>:</td>
                                    <td><?php echo e($mapel->jam_mulai); ?></td>
                                </tr>
                                <tr>
                                    <td>Jam Selesai</td>
                                    <td>:</td>
                                    <td><?php echo e($mapel->jam_selesai); ?></td>
                                </tr>
                            </table>
                            <a href="<?php echo e(route('presensi.isi-laporan', $mapel)); ?>">
                                <div class="d-grid">
                                    <button class="btn btn btn-dark btn-border btn-sm">
                                        Lihat Presensi
                                    </button>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php /**PATH /home/aziz/Project/madrosy/resources/views/livewire/presensi/laporan-presensi.blade.php ENDPATH**/ ?>