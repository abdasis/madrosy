<div class="app-menu navbar-menu">
    <div class="navbar-brand-box">
        <a href="{{route('dashboard')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('assets/images/logo-sm.png')}}" class="rounded" alt="" height="40">
                    </span>
            <span class="logo-lg">
                        <img src="{{asset('assets/images/logo-dark.png')}}" class="rounded" alt="" height="40">
                    </span>
        </a>
        <a href="{{route('dashboard')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('assets/images/logo-sm.png')}}" class="rounded" alt="" height="40">
                    </span>
            <span class="logo-lg">
                        <img src="{{asset('assets/images/logo-light.png')}}" class="rounded" alt="" height="40">
                    </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover"
                id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>

            <ul class="navbar-nav fw-medium" id="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('dashboard')}}" aria-expanded="false">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-widgets">Dashboard</span>
                    </a>
                </li>
                @hasanyrole('Kepala Sekolah|Guru|BK')
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="las la-user-friends fs-21"></i> <span data-key="t-dashboards">Siswa</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="{{route('santri.semua')}}" class="nav-link" data-key="t-crm"> Semua Siswa </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('santri.tambah')}}" class="nav-link" data-key="t-analytics"> Tambah
                                    Siswa </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endhasanyrole
                @hasanyrole('Kepala Sekolah')

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#dataGuru" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="dataGuru">
                        <i class="mdi mdi-school fs-21"></i> <span data-key="t-dashboards">Guru</span>
                    </a>
                    <div class="collapse menu-dropdown" id="dataGuru">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('guru.semua')}}" class="nav-link" data-key="t-analytics"> Semua
                                    Guru </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('guru.tambah')}}" class="nav-link" data-key="t-crm"> Tambah Data </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('riwayat-pendidikan.semua')}}" class="nav-link" data-key="t-crm">
                                    Riwayat Sekolah </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endhasanyrole

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#akademik" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="akademik">
                        <i class="mdi mdi-book-education-outline fs-21"></i> <span
                            data-key="t-dashboards">Akademik</span>
                    </a>
                    <div class="collapse menu-dropdown" id="akademik">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('tahun-ajaran.semua')}}" class="nav-link" data-key="t-analytics"> Tahun
                                    Ajaran </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('kelas.semua')}}" class="nav-link" data-key="t-crm"> Kelas </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('mapel.semua')}}" class="nav-link" data-key="t-crm">
                                    Mata Pelajaran </a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#presensi" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="presensi">
                        <i class="ri-fingerprint-2-line"></i> <span data-key="t-apps">Presensi</span>
                    </a>
                    <div class="collapse menu-dropdown" id="presensi">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('presensi.daftar-kelas')}}" class="nav-link" data-key="t-calendar">
                                    Absensi </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('presensi.laporan-presensi')}}" class="nav-link" data-key="t-chat">
                                    Laporan Presensi </a>
                            </li>
                        </ul>
                    </div>
                </li>

                @hasanyrole('Kepala Sekolah|BK')
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#konseling" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="konseling">
                        <i class="ri-book-3-line"></i> <span data-key="t-layouts">Konseling</span>
                    </a>
                    <div class="collapse menu-dropdown" id="konseling">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('konseling.tambah')}}" class="nav-link" data-key="t-horizontal">Catat
                                    Konseling</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('pelanggaran.semua')}}" class="nav-link" data-key="t-detached">Jenis
                                    Pelanggaran</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('konseling.semua')}}" class="nav-link" data-key="t-detached">Riwayat
                                    Konseling</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endhasanyrole

                @hasanyrole('Kepala Sekolah')
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#tagihan" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="tagihan">
                        <i class="ri-wallet-line"></i> <span data-key="t-apps">Penagihan</span>
                    </a>
                    <div class="collapse menu-dropdown" id="tagihan">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('kategori-tagihan.semua')}}" class="nav-link" data-key="t-calendar">
                                    Kategori Tagihan </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('tagihan.semua')}}" class="nav-link" data-key="t-chat"> Data
                                    Tagihan </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endhasanyrole
                @hasanyrole('Kepala Sekolah')
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#jadwal" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="jadwal">
                        <i class=" ri-todo-line"></i> <span data-key="t-apps">Jadwal Pelajaran</span>
                    </a>
                    <div class="collapse menu-dropdown" id="jadwal">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('jadwal.tambah')}}" class="nav-link" data-key="t-calendar"> Tambah
                                    Jadwal </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('jadwal.semua')}}" class="nav-link" data-key="t-chat"> Data Jadwal </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endhasanyrole

                @hasanyrole('Kepala Sekolah')
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#pengaturan" data-bs-toggle="collapse" role="button"
                       aria-expanded="false" aria-controls="pengaturan">
                        <i class="ri-settings-4-line"></i> <span data-key="t-apps">Pengaturan</span>
                    </a>
                    <div class="collapse menu-dropdown" id="pengaturan">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('pengaturan.semua')}}" class="nav-link" data-key="t-calendar">
                                    General </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('jadwal.tambah')}}" class="nav-link" data-key="t-calendar">
                                    Pengguna </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('permission.semua')}}" class="nav-link" data-key="t-chat">
                                    Permission </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('pengaturan.data-instansi')}}" class="nav-link" data-key="t-chat"> Data
                                    Instansi </a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('log.semua')}}">
                        <i class="ri-file-paper-2-line fs-20"></i> <span>History</span>
                    </a>
                </li>
                @endhasanyrole
            </ul>
        </div>
    </div>
</div>
