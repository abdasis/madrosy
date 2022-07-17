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
