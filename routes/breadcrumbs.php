<?php // routes/breadcrumbs.php

// Note: Laravel will automatically resolve `Breadcrumbs::` without
// this import. This is nice for IDE syntax and refactoring.
use Diglactic\Breadcrumbs\Breadcrumbs;

// This import is also not required, and you could replace `BreadcrumbTrail $trail`
//  with `$trail`. This is nice for IDE type checking and completion.
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
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
