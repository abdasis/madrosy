<?php

use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

Breadcrumbs::for('dashboard', function (BreadcrumbTrail $trail) {
    $trail->push('Dashboard', route('dashboard'));
});

Breadcrumbs::for('santri.semua', function (BreadcrumbTrail $trail){
    $trail->parent('dashboard');
    $trail->push('Semua Santri', route('santri.semua'));
});

Breadcrumbs::for('santri.tambah', function (BreadcrumbTrail $trail){
    $trail->parent('santri.semua');
    $trail->push('Tambah Santri', route('santri.tambah'));
});

Breadcrumbs::for('santri.detail', function (BreadcrumbTrail $trail, $id){
    $trail->parent('santri.semua');
    $trail->push('Detail Santri', route('santri.detail', $id));
});

Breadcrumbs::for('santri.edit', function (BreadcrumbTrail $trail, $id){
    $trail->parent('santri.semua');
    $trail->push('Edit Santri', route('santri.edit', $id));
});

Breadcrumbs::for('guru.semua', function (BreadcrumbTrail $trail){
    $trail->parent('dashboard');
    $trail->push('Semua Guru', route('guru.semua'));
});

Breadcrumbs::for('guru.tambah', function (BreadcrumbTrail $trail){
    $trail->parent('guru.semua');
    $trail->push('Tambah Guru', route('guru.tambah'));
});

Breadcrumbs::for('guru.detail', function (BreadcrumbTrail $trail, $id){
    $trail->parent('guru.semua');
    $trail->push('Detail Guru', route('guru.detail', $id));
});

Breadcrumbs::for('guru.edit', function (BreadcrumbTrail $trail, $id){
    $trail->parent('guru.semua');
    $trail->push('Edit Guru', route('guru.edit', $id));
});


Breadcrumbs::for('riwayat-pendidikan.semua', function (BreadcrumbTrail $trail){
    $trail->parent('dashboard');
    $trail->push('Semua Riwayat Pendidikan', route('riwayat-pendidikan.semua'));
});

Breadcrumbs::for('riwayat-pendidikan.tambah', function (BreadcrumbTrail $trail){
    $trail->parent('riwayat-pendidikan.semua');
    $trail->push('Tambah Riwayat Pendidikan', route('riwayat-pendidikan.tambah'));
});

Breadcrumbs::for('riwayat-pendidikan.detail', function (BreadcrumbTrail $trail, $id){
    $trail->parent('riwayat-pendidikan.semua');
    $trail->push('Detail Riwayat Pendidikan', route('riwayat-pendidikan.detail', $id));
});

Breadcrumbs::for('riwayat-pendidikan.edit', function (BreadcrumbTrail $trail, $id){
    $trail->parent('riwayat-pendidikan.semua');
    $trail->push('Edit Riwayat Pendidikan', route('riwayat-pendidikan.edit', $id));
});

Breadcrumbs::for('konseling.semua', function (BreadcrumbTrail $trail){
    $trail->parent('dashboard');
    $trail->push('Semua Konseling', route('konseling.semua'));
});

Breadcrumbs::for('konseling.tambah', function (BreadcrumbTrail $trail){
    $trail->parent('konseling.semua');
    $trail->push('Tambah Konseling', route('konseling.tambah'));
});

Breadcrumbs::for('konseling.edit', function (BreadcrumbTrail $trail, $id){
    $trail->parent('konseling.semua');
    $trail->push('Edit Konseling', route('konseling.edit', $id));
});

Breadcrumbs::for('pelanggaran.semua', function (BreadcrumbTrail $trail){
    $trail->parent('dashboard');
    $trail->push('Semua Pelanggaran', route('pelanggaran.semua'));
});

Breadcrumbs::for('pelanggaran.edit', function (BreadcrumbTrail $trail, $id){
    $trail->parent('pelanggaran.semua');
    $trail->push('Edit Pelanggaran', route('pelanggaran.edit', $id));
});
