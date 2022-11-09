<?php

use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

Breadcrumbs::for('presensi.scan-qr', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Ruang Absensi Guru', route('absensi.scan'));
});

Breadcrumbs::for('pengaturan.menu', function (BreadcrumbTrail $trail) {
    $trail->parent('pengaturan.semua');
    $trail->push('Pengaturan Menu', route('pengaturan.menu'));
});

Breadcrumbs::for('santri.semua', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Semua Siswa', route('santri.semua'));
});
Breadcrumbs::for('santri.tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('santri.semua');
    $trail->push('Tambah Siswa', route('santri.tambah'));
});
Breadcrumbs::for('santri.detail', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('santri.semua');
    $trail->push('Detail Siswa', route('santri.detail', $id));
});
Breadcrumbs::for('santri.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('santri.semua');
    $trail->push('Edit Siswa', route('santri.edit', $id));
});
Breadcrumbs::for('guru.semua', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Semua Guru', route('guru.semua'));
});
Breadcrumbs::for('guru.tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('guru.semua');
    $trail->push('Tambah Guru', route('guru.tambah'));
});
Breadcrumbs::for('guru.detail', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('guru.semua');
    $trail->push('Detail Guru', route('guru.detail', $id));
});
Breadcrumbs::for('guru.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('guru.semua');
    $trail->push('Edit Guru', route('guru.edit', $id));
});
Breadcrumbs::for('riwayat-pendidikan.semua', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Semua Riwayat Pendidikan', route('riwayat-pendidikan.semua'));
});
Breadcrumbs::for('riwayat-pendidikan.tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('riwayat-pendidikan.semua');
    $trail->push('Tambah Riwayat Pendidikan', route('riwayat-pendidikan.tambah'));
});
Breadcrumbs::for('riwayat-pendidikan.detail', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('riwayat-pendidikan.semua');
    $trail->push('Detail Riwayat Pendidikan', route('riwayat-pendidikan.detail', $id));
});
Breadcrumbs::for('riwayat-pendidikan.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('riwayat-pendidikan.semua');
    $trail->push('Edit Riwayat Pendidikan', route('riwayat-pendidikan.edit', $id));
});
Breadcrumbs::for('konseling.semua', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Semua Konseling', route('konseling.semua'));
});
Breadcrumbs::for('konseling.tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('konseling.semua');
    $trail->push('Tambah Konseling', route('konseling.tambah'));
});
Breadcrumbs::for('konseling.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('konseling.semua');
    $trail->push('Edit Konseling', route('konseling.edit', $id));
});
Breadcrumbs::for('pelanggaran.semua', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Semua Pelanggaran', route('pelanggaran.semua'));
});
Breadcrumbs::for('pelanggaran.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('pelanggaran.semua');
    $trail->push('Edit Pelanggaran', route('pelanggaran.edit', $id));
});
Breadcrumbs::for('rekening.semua', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Semua Rekening', route('rekening.semua'));
});
Breadcrumbs::for('rekening.tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('rekening.semua');
    $trail->push('Tambah Rekening', route('rekening.tambah'));
});
Breadcrumbs::for('rekening.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('rekening.semua');
    $trail->push('Edit Rekening', route('rekening.edit', $id));
});
Breadcrumbs::for('tahun-ajaran.semua', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Semua Tahun Ajaran', route('tahun-ajaran.semua'));
});
Breadcrumbs::for('tahun-ajaran.tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('tahun-ajaran.semua');
    $trail->push('Tambah Tahun Ajaran', route('tahun-ajaran.tambah'));
});
Breadcrumbs::for('tahun-ajaran.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('tahun-ajaran.semua');
    $trail->push('Edit Tahun Ajaran', route('tahun-ajaran.edit', $id));
});
Breadcrumbs::for('kategori-tagihan.semua', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Semua Kategori Tagihan', route('kategori-tagihan.semua'));
});
Breadcrumbs::for('kategori-tagihan.tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('kategori-tagihan.semua');
    $trail->push('Tambah Kategori Tagihan', route('kategori-tagihan.tambah'));
});
Breadcrumbs::for('kategori-tagihan.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('kategori-tagihan.semua');
    $trail->push('Edit Kategori Tagihan', route('kategori-tagihan.edit', $id));
});
Breadcrumbs::for('kelas.semua', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Semua Kelas', route('kelas.semua'));
});
Breadcrumbs::for('detail.kelas', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('kelas.semua');
    $trail->push('Rincian Kelas', route('detail.kelas', $id));
});
Breadcrumbs::for('kelas.tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('kelas.semua');
    $trail->push('Tambah Kelas', route('kelas.tambah'));
});
Breadcrumbs::for('kelas.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('kelas.semua');
    $trail->push('Edit Kelas', route('kelas.edit', $id));
});
Breadcrumbs::for('kelas.migrasi', function (BreadcrumbTrail $trail) {
    $trail->parent('kelas.semua');
    $trail->push('Pindah Kelas', route('kelas.migrasi'));
});
Breadcrumbs::for('kelas.konfirmasi', function (BreadcrumbTrail $trail) {
    $trail->parent('kelas.semua');
    $trail->push('Pindah Kelas', route('kelas.konfirmasi'));
});
Breadcrumbs::for('tagihan.semua', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Semua Tagihan', route('tagihan.semua'));
});
Breadcrumbs::for('tagihan.bayar', function (BreadcrumbTrail $trial, $kode) {
    $trial->parent('tagihan.semua');
    $trial->push('Bayar Tagihan', route('tagihan.bayar', $kode));
});
Breadcrumbs::for('tagihan.tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('tagihan.semua');
    $trail->push('Tambah Tagihan', route('tagihan.tambah'));
});
Breadcrumbs::for('tagihan.atur-perkelas', function (BreadcrumbTrail $trail) {
    $trail->parent('tagihan.semua');
    $trail->push('Atur Tagihan Perkelas', route('tagihan.atur-perkelas'));
});
Breadcrumbs::for('tagihan.detail', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('tagihan.semua');
    $trail->push('Detail Tagihan', route('tagihan.detail', $id));
});

Breadcrumbs::for('edit.tagihan', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('tagihan.semua');
    $trail->push('Sunting Tagihan', route('edit.tagihan', $id));
});

Breadcrumbs::for('mapel.semua', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Semua Mata Pelajaran', route('mapel.semua'));
});
Breadcrumbs::for('mapel.tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('mapel.semua');
    $trail->push('Tambah Mata Pelajaran', route('mapel.tambah'));
});
Breadcrumbs::for('mapel.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('mapel.semua');
    $trail->push('Edit Mata Pelajaran', route('mapel.edit', $id));
});
Breadcrumbs::for('mapel.detail', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('mapel.semua');
    $trail->push('Detail Mata Pelajaran', route('mapel.detail', $id));
});
Breadcrumbs::for('presensi.laporan-presensi', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Laporan Presensi', route('presensi.laporan-presensi'));
});
Breadcrumbs::for('jadwal.semua', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Semua Jadwal', route('jadwal.semua'));
});
Breadcrumbs::for('jadwal.tambah', function (BreadcrumbTrail $trail) {
    $trail->parent('jadwal.semua');
    $trail->push('Tambah Jadwal', route('jadwal.tambah'));
});
Breadcrumbs::for('jadwal.edit', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('jadwal.semua');
    $trail->push('Edit Jadwal', route('jadwal.edit', $id));
});
Breadcrumbs::for('laporan.presensi-laporan', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Data Jadwal', route('presensi.laporan-presensi'));
});
Breadcrumbs::for('presensi.daftar-siswa', function (BreadcrumbTrail $trail, $jadwal) {
    $trail->parent('laporan.presensi-laporan');
    $trail->push('Rekam Absensi', route('presensi.daftar-siswa', $jadwal));
});
Breadcrumbs::for('presensi.isi-laporan', function (BreadcrumbTrail $trail, $id) {
    $trail->parent('laporan.presensi-laporan');
    $trail->push('Data Absensi', route('presensi.isi-laporan', $id));
});
Breadcrumbs::for('pengaturan.semua', function (BreadcrumbTrail $trail){
    $trail->parent('dashboard');
    $trail->push('Semua Pengaturan', route('pengaturan.semua'));
});
Breadcrumbs::for('pengaturan.data-instansi', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Data Instansi', route('pengaturan.data-instansi'));
});

Breadcrumbs::for('presensi.daftar-kelas', function (BreadcrumbTrail $trail) {
    $trail->parent('presensi.laporan-presensi');
    $trail->push('Daftar Kelas', route('presensi.daftar-kelas'));
});

Breadcrumbs::for('log.semua', function (BreadcrumbTrail $trail) {
    $trail->parent('dashboard');
    $trail->push('Log Activity', route('log.semua'));
});
