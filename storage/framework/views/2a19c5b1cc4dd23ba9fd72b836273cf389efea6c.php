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

                <ul class="navbar-nav" id="navbar-nav">
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
                            <i class="las la-user-friends fs-21"></i> <span data-key="t-dashboards">Santri</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarDashboards">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="<?php echo e(route('santri.tambah')); ?>" class="nav-link" data-key="t-analytics"> Tambah Santri </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo e(route('santri.semua')); ?>" class="nav-link" data-key="t-crm"> Semua Santri </a>
                                </li>
                                <li class="nav-item">
                                    <a href="index-2.html" class="nav-link" data-key="t-ecommerce"> PPDB Management </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#tahfidz" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="tahfidz">
                            <i class="ri-book-2-fill"></i> <span data-key="t-apps">Tahfid</span>
                        </a>
                        <div class="collapse menu-dropdown" id="tahfidz">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="apps-calendar.html" class="nav-link" data-key="t-calendar"> Rekam Hafalan </a>
                                </li>
                                <li class="nav-item">
                                    <a href="apps-chat.html" class="nav-link" data-key="t-chat"> Rekapan Hafalan </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#kesehatan" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="kesehatan">
                            <i class="ri-health-book-line"></i> <span data-key="t-layouts">Kesehatan</span>
                        </a>
                        <div class="collapse menu-dropdown" id="kesehatan">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="layouts-horizontal.html" target="_blank" class="nav-link" data-key="t-horizontal">Rekap Medis</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Semua Riwayat</a>
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
                                    <a href="layouts-horizontal.html" target="_blank" class="nav-link" data-key="t-horizontal">Rekap Medis</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Semua Riwayat</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link menu-link" href="#sidebarLayouts" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarLayouts">
                            <i class="ri-book-2-line"></i> <span data-key="t-layouts">Perizinan</span>
                        </a>
                        <div class="collapse menu-dropdown" id="sidebarLayouts">
                            <ul class="nav nav-sm flex-column">
                                <li class="nav-item">
                                    <a href="layouts-horizontal.html" target="_blank" class="nav-link" data-key="t-horizontal">Rekap Medis</a>
                                </li>
                                <li class="nav-item">
                                    <a href="layouts-detached.html" target="_blank" class="nav-link" data-key="t-detached">Semua Riwayat</a>
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
                </ul>
            </div>
            <!-- Sidebar -->
        </div>
    </div>
</div>
<?php /**PATH E:\GitHub\madrosy\resources\views/components/navbar.blade.php ENDPATH**/ ?>