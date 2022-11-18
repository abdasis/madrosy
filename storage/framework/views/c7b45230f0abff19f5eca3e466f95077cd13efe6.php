<div>
    
    <?php if($status_absensi == 'valid'): ?>
        <div class="row gy-3">
            <?php $__currentLoopData = $data_jadwal_guru; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal_perguru): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-3">
                    <!-- Ribbon Shape -->
                    <div class="card ribbon-box border shadow-none mb-lg-0">
                        <div class="card-body">
                            <div class="ribbon ribbon-primary ribbon-shape"><?php echo e($jadwal_perguru->kelas->nama_kelas); ?></div>
                            <h5 class="fs-14 text-end"><?php echo e(Str::limit($jadwal_perguru->mapel->nama,20)); ?></h5>
                            <div class="ribbon-content text-muted mt-4">
                                <table class="table table-sm">
                                    <tr>
                                        <td>Senin</td>
                                        <td>:</td>
                                        <td><?php echo e($jadwal_perguru->hari); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jam Mulai</td>
                                        <td>:</td>
                                        <td><?php echo e($jadwal_perguru->jam_mulai); ?></td>
                                    </tr>
                                    <tr>
                                        <td>Jam Selesai</td>
                                        <td>:</td>
                                        <td><?php echo e($jadwal_perguru->jam_selesai); ?></td>
                                    </tr>
                                </table>
                                <a href="<?php echo e(route('presensi.daftar-siswa', $jadwal_perguru)); ?>">
                                    <div class="d-grid">
                                        <button class="btn btn btn-dark btn-border btn-sm">
                                            Absen Sekarang
                                        </button>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <?php if($data_jadwal_hari_ini->count() > 0): ?>
            <div class="my-4 text-center">
                <button class="btn btn-primary btn-border collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#jadwalLainnya" aria-expanded="false" aria-controls="collapseExample">
                    Jadwal Lainnya
                </button>
            </div>
            <div class="collapse" id="jadwalLainnya" style="">
                <div class="row gy-3">
                    <?php $__currentLoopData = $data_jadwal_hari_ini; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $jadwal_hari_ini): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="col-md-3">
                            <div class="card ribbon-box border shadow-none mb-lg-0">
                                <div class="card-body">
                                    <div
                                        class="ribbon ribbon-primary ribbon-shape"><?php echo e($jadwal_hari_ini->kelas->nama_kelas); ?></div>
                                    <h5 class="fs-14 text-end"><?php echo e(Str::limit($jadwal_hari_ini->mapel->nama,20)); ?></h5>
                                    <div class="ribbon-content text-muted mt-4">
                                        <table class="table table-sm">
                                            <tr>
                                                <td>Senin</td>
                                                <td>:</td>
                                                <td><?php echo e($jadwal_hari_ini->hari); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Jam Mulai</td>
                                                <td>:</td>
                                                <td><?php echo e($jadwal_hari_ini->jam_mulai); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Jam Selesai</td>
                                                <td>:</td>
                                                <td><?php echo e($jadwal_hari_ini->jam_selesai); ?></td>
                                            </tr>
                                            <tr>
                                                <td>Guru</td>
                                                <td>:</td>
                                                <td><?php echo e($jadwal_hari_ini->guru->nama); ?></td>
                                            </tr>
                                        </table>
                                        <a href="<?php echo e(route('presensi.daftar-siswa', $jadwal_hari_ini)); ?>">
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
        <?php else: ?>
            <div class="h-100 my-3">
                <div class="card bg-transparent shadow-none">
                    <div class="card-body d-flex align-items-center">
                        <div class="nodata d-grid mx-auto align-middle text-center">
                            <lord-icon
                                src="https://cdn.lordicon.com/jvucoldz.json"
                                trigger="loop"
                                delay="2000"
                                style="width:200px;height:200px">
                            </lord-icon>
                            <h5 class="my-0">Tidak ada jadwal lain hari ini</h5>
                        </div>

                    </div>
                </div>
            </div>
        <?php endif; ?>
    <?php else: ?>
        <div class="alert alert-warning">
            Kamu belum melakukan absensi, silahkan klik <a href="<?php echo e(route('presensi.scan-qr')); ?>">disini</a> untuk
            melakukan absensi terlebih dahulu
        </div>
    <?php endif; ?>
</div>
<?php /**PATH C:\Users\abdas\Documents\GitHub\madrosy\resources\views/livewire/presensi/data-kelas.blade.php ENDPATH**/ ?>