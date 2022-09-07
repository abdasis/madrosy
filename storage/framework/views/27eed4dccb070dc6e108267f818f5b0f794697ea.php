<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <div class="app-menu navbar-menu">
        <!-- LOGO -->
        <div class="navbar-brand-box">
            <!-- Dark Logo-->
            <a href="<?php echo e(route('dashboard')); ?>" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="<?php echo e(asset('assets/images/logo-sm.png')); ?>" alt="" height="30">
                    </span>
                <span class="logo-lg">
                        <img src="<?php echo e(asset('assets/images/logo-dark.png')); ?>" alt="" height="30">
                    </span>
            </a>
            <!-- Light Logo-->
            <a href="<?php echo e(route('dashboard')); ?>" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="<?php echo e(asset('assets/images/logo-sm.png')); ?>" alt="" height="22">
                    </span>
                <span class="logo-lg">
                        <img src="<?php echo e(asset('assets/images/logo-light.png')); ?>" alt="" height="17">
                    </span>
            </a>
            <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
                <i class="ri-record-circle-line"></i>
            </button>
        </div>

        <div id="scrollbar">
            <div class="container-fluid">

                <div id="two-column-menu">
                </div>

                <ul class="navbar-nav fw-medium" id="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="<?php echo e(route('dashboard')); ?>" aria-expanded="false">
                            <i class="ri-dashboard-2-line"></i> <span data-key="t-widgets">Dashboard</span>
                        </a>
                    </li>
                    <li class="menu-title">
                        <span data-key="t-menu">Kesiswaan</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                            <i class="las la-user-friends fs-21"></i> <span data-key="t-dashboards">Siswa</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarDashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="<?php echo e(route('santri.tambah')); ?>" class="nav-link" data-key="t-analytics"> Tambah Siswa </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('santri.semua')); ?>" class="nav-link" data-key="t-crm"> Semua Siswa </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-2.html" class="nav-link" data-key="t-ecommerce"> PPDB Management </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#konseling" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="konseling">
                            <i class="ri-book-3-line"></i> <span data-key="t-layouts">Konseling</span>
                        </a>
                        <div class="collapse menu-dropdown" id="konseling">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="<?php echo e(route('konseling.tambah')); ?>" class="nav-link" data-key="t-horizontal">Catat Konseling</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('pelanggaran.semua')); ?>" class="nav-link" data-key="t-detached">Jenis Pelanggaran</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('konseling.semua')); ?>" class="nav-link" data-key="t-detached">Riwayat Konseling</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    
                    <li class="menu-title">
                        <span data-key="t-menu">Keuangan</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#keuangan" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="keuangan">
                            <i class="ri-bank-fill"></i> <span data-key="t-layouts">e-Money</span>
                        </a>
                        <div class="collapse menu-dropdown" id="keuangan">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="<?php echo e(route('rekening.semua')); ?>" target="_self" class="nav-link" data-key="t-horizontal">Data Rekening</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Data Transaksi</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="<?php echo e(route('dashboard')); ?>" aria-expanded="false">
                            <i class="ri-wallet-fill"></i> <span data-key="t-widgets">Tabungan</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#tagihan" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="tagihan">
                            <i class="ri-file-list-3-line"></i> <span data-key="t-layouts">Tagihan</span>
                        </a>
                        <div class="collapse menu-dropdown" id="tagihan">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="<?php echo e(route('kategori-tagihan.semua')); ?>" target="_self" class="nav-link" data-key="t-horizontal">Kategori Tagihan</a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('tagihan.semua')); ?>" target="_self" class="nav-link" data-key="t-detached">Data Tagihan</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Riwayat Pembayaran</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-title">
                        <span data-key="t-menu">Kepegawaian</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#dataGuru" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="dataGuru">
                            <i class="mdi mdi-school fs-21"></i> <span data-key="t-dashboards">Pengajar</span>
                        </a>
                        <div class="collapse menu-dropdown" id="dataGuru">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="<?php echo e(route('guru.tambah')); ?>" class="nav-link" data-key="t-analytics"> Tambah Pengajar </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('guru.semua')); ?>" class="nav-link" data-key="t-crm"> Semua Pengajar </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('riwayat-pendidikan.semua')); ?>" class="nav-link" data-key="t-crm"> Riwayat Sekolah </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('guru.semua')); ?>" class="nav-link" data-key="t-crm"> Riwayat Pelatihan </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('guru.semua')); ?>" class="nav-link" data-key="t-crm"> Riwayat Jabatan </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('guru.semua')); ?>" class="nav-link" data-key="t-crm"> Riwayat Mengajar </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('guru.semua')); ?>" class="nav-link" data-key="t-crm"> Riwayat Penghargaan </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#penggajian" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="penggajian">
                            <i class=" ri-hand-coin-line"></i> <span data-key="t-apps">Penggajian</span>
                        </a>
                        <div class="collapse menu-dropdown" id="penggajian">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="apps-calendar.html" class="nav-link" data-key="t-calendar"> Pengaturan Gaji </a>
                                </li>
                                <li class="nav-item">
                                    <a href="apps-chat.html" class="nav-link" data-key="t-chat"> Data Penggajian </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu-title">
                        <span data-key="t-menu">Akademik</span>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#jadwal" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="jadwal">
                            <i class=" ri-todo-line"></i> <span data-key="t-apps">Jadwal Pelajaran</span>
                        </a>
                        <div class="collapse menu-dropdown" id="jadwal">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="apps-calendar.html" class="nav-link" data-key="t-calendar"> Tambah Jadwal </a>
                                </li>
                                <li class="nav-item">
                                    <a href="apps-chat.html" class="nav-link" data-key="t-chat"> Data Jadwal </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#absensi">
                            <i class=" ri-fingerprint-2-line"></i> <span>Presensi</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="<?php echo e(route('tahun-ajaran.semua')); ?>">
                            <i class="ri-calendar-event-line"></i> <span>Tahun Ajaran</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="<?php echo e(route('kelas.semua')); ?>">
                            <i class="bx bxs-door-open fs-20"></i> <span>Kelas</span>
                        </a>
                    </li>
                </ul>
                <div class="my-3 d-grid px-3">
                    <button class="btn btn-light waves-effect waves-light align-items-center d-flex gap-1 justify-content-center rounded-pill btn-border ">
                        <i class="bx bxs-book-bookmark"></i>
                        <span class="fs-14">Documentasi</span>
                    </button>
                </div>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
</div>
<?php /**PATH /home/aziz/SKA Project/madrosy/resources/views/components/navbar.blade.php ENDPATH**/ ?>