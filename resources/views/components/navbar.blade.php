<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="{{route('dashboard')}}" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="{{asset('assets/images/logo-sm.png')}}" class="rounded" alt="" height="40">
                    </span>
            <span class="logo-lg">
                        <img src="{{asset('assets/images/logo-dark.png')}}" class="rounded" alt="" height="40">
                    </span>
        </a>
        <!-- Light Logo-->
        <a href="{{route('dashboard')}}" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="{{asset('assets/images/logo-sm.png')}}" class="rounded" alt="" height="40">
                    </span>
            <span class="logo-lg">
                        <img src="{{asset('assets/images/logo-light.png')}}" class="rounded" alt="" height="40">
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
                    <a class="nav-link menu-link" href="{{route('dashboard')}}" aria-expanded="false">
                        <i class="ri-dashboard-2-line"></i> <span data-key="t-widgets">Dashboard</span>
                    </a>
                </li>
                @hasanyrole('Kepala Sekolah|Guru|BK')
                {{--  <li class="menu-title">
                      <span data-key="t-menu">Kesiswaan</span>
                  </li>--}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarDashboards" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarDashboards">
                        <i class="las la-user-friends fs-21"></i> <span data-key="t-dashboards">Siswa</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarDashboards">
                        <ul class="nav nav-sm flex-column">

                            <li class="nav-item">
                                <a href="{{route('santri.semua')}}" class="nav-link" data-key="t-crm"> Semua Siswa </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('santri.tambah')}}" class="nav-link" data-key="t-analytics"> Tambah Siswa </a>
                            </li>
                            {{-- <li class="nav-item">
                                 <a href="index-2.html" class="nav-link" data-key="t-ecommerce"> PPDB Management </a>
                             </li>--}}
                        </ul>
                    </div>
                </li>
                @endhasanyrole
                @hasanyrole('Kepala Sekolah')

                {{--<li class="menu-title">
                    <span data-key="t-menu">Kepegawaian</span>
                </li>--}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#dataGuru" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="dataGuru">
                        <i class="mdi mdi-school fs-21"></i> <span data-key="t-dashboards">Guru</span>
                    </a>
                    <div class="collapse menu-dropdown" id="dataGuru">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('guru.semua')}}" class="nav-link" data-key="t-analytics"> Semua Guru </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('guru.tambah')}}" class="nav-link" data-key="t-crm"> Tambah Data </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('riwayat-pendidikan.semua')}}" class="nav-link" data-key="t-crm"> Riwayat Sekolah </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('guru.semua')}}" class="nav-link" data-key="t-crm"> Riwayat Pelatihan </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('guru.semua')}}" class="nav-link" data-key="t-crm"> Riwayat Jabatan </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('guru.semua')}}" class="nav-link" data-key="t-crm"> Riwayat Mengajar </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('guru.semua')}}" class="nav-link" data-key="t-crm"> Riwayat Penghargaan </a>
                            </li>
                        </ul>
                    </div>
                </li>
                {{-- <li class="nav-item">
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
                 </li>--}}
                @endhasanyrole
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('tahun-ajaran.semua')}}">
                        <i class="ri-calendar-event-line"></i> <span>Tahun Ajaran</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('kelas.semua')}}">
                        <i class="bx bxs-door-open fs-20"></i> <span>Kelas</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="{{route('mapel.semua')}}">
                        <i class="ri-book-line fs-20"></i> <span>Mata Pelajaran</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="#presensi" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="presensi">
                        <i class="ri-fingerprint-2-line"></i> <span data-key="t-apps">Presensi</span>
                    </a>
                    <div class="collapse menu-dropdown" id="presensi">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('presensi.daftar-kelas')}}" class="nav-link" data-key="t-calendar"> Absensi </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('presensi.laporan-presensi')}}" class="nav-link" data-key="t-chat"> Laporan Presensi </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{--<li class="nav-item">
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
                </li>--}}
                {{--<li class="nav-item">
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
                </li>--}}

                {{--<li class="nav-item">
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
                </li>--}}
                @hasanyrole('Kepala Sekolah|BK')
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#konseling" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="konseling">
                        <i class="ri-book-3-line"></i> <span data-key="t-layouts">Konseling</span>
                    </a>
                    <div class="collapse menu-dropdown" id="konseling">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('konseling.tambah')}}" class="nav-link" data-key="t-horizontal">Catat Konseling</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('pelanggaran.semua')}}" class="nav-link" data-key="t-detached">Jenis Pelanggaran</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('konseling.semua')}}" class="nav-link" data-key="t-detached">Riwayat Konseling</a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endhasanyrole

                @hasanyrole('Kepala Sekolah')
                {{--<li class="menu-title">
                    <span data-key="t-menu">Keuangan</span>
                </li>--}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#tagihan" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="tagihan">
                        <i class="ri-wallet-line"></i> <span data-key="t-apps">Penagihan</span>
                    </a>
                    <div class="collapse menu-dropdown" id="tagihan">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('kategori-tagihan.semua')}}" class="nav-link" data-key="t-calendar"> Kategori Tagihan </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('tagihan.semua')}}" class="nav-link" data-key="t-chat"> Data Tagihan </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endhasanyrole
                @hasanyrole('Kepala Sekolah')
                {{--<li class="menu-title">
                    <span data-key="t-menu">Akademik</span>
                </li>--}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#jadwal" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="jadwal">
                        <i class=" ri-todo-line"></i> <span data-key="t-apps">Jadwal Pelajaran</span>
                    </a>
                    <div class="collapse menu-dropdown" id="jadwal">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('jadwal.tambah')}}" class="nav-link" data-key="t-calendar"> Tambah Jadwal </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('jadwal.semua')}}" class="nav-link" data-key="t-chat"> Data Jadwal </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endhasanyrole

                @hasanyrole('Kepala Sekolah')
                {{--<li class="menu-title">
                    <span data-key="t-menu">Sistem</span>
                </li>--}}
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#pengaturan" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="pengaturan">
                        <i class="ri-settings-4-line"></i> <span data-key="t-apps">Pengaturan</span>
                    </a>
                    <div class="collapse menu-dropdown" id="pengaturan">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="{{route('pengaturan.semua')}}" class="nav-link" data-key="t-calendar"> General </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('jadwal.tambah')}}" class="nav-link" data-key="t-calendar"> Pengguna </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('permission.semua')}}" class="nav-link" data-key="t-chat"> Permission </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('pengaturan.data-instansi')}}" class="nav-link" data-key="t-chat"> Data Instansi </a>
                            </li>
                        </ul>
                    </div>
                </li>
                @endhasanyrole
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
