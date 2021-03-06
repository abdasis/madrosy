<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::group(['prefix' => 'santri'], function (){
        Route::get('/', \App\Http\Livewire\Santri\Semua::class)->name('santri.semua');
        Route::get('tambah', \App\Http\Livewire\Santri\Tambah::class)->name('santri.tambah');
        Route::get('detail/{id}', \App\Http\Livewire\Santri\Detail::class)->name('santri.detail');
        Route::get('edit/{id}', \App\Http\Livewire\Santri\Edit::class)->name('santri.edit');
    });

    Route::group(['prefix' => 'guru'], function (){
        Route::get('/', \App\Http\Livewire\Guru\Semua::class)->name('guru.semua');
        Route::get('/tambah', \App\Http\Livewire\Guru\Tambah::class)->name('guru.tambah');
        Route::get('/detail/{id}', \App\Http\Livewire\Guru\Detail::class)->name('guru.detail');
        Route::get('/edit/{id}', \App\Http\Livewire\Guru\Edit::class)->name('guru.edit');
    });
});
