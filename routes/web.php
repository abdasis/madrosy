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
        Route::get('/detail/{guru}', \App\Http\Livewire\Guru\Detail::class)->name('guru.detail');
        Route::get('/edit/{guru}', \App\Http\Livewire\Guru\Edit::class)->name('guru.edit');
    });

    Route::group(['prefix' => 'pendidikan'], function (){
        Route::get('/', \App\Http\Livewire\RiwayatPendidikan\Semua::class)->name('riwayat-pendidikan.semua');
        Route::get('/tambah', \App\Http\Livewire\RiwayatPendidikan\Tambah::class)->name('riwayat-pendidikan.tambah');
        Route::get('/detail/{pendidikan}', \App\Http\Livewire\RiwayatPendidikan\Detail::class)->name('riwayat-pendidikan.detail');
        Route::get('/edit/{pendidikan}', \App\Http\Livewire\RiwayatPendidikan\Edit::class)->name('riwayat-pendidikan.edit');
    });

    Route::group(['prefix' => 'konseling'], function (){
        Route::get('/', \App\Http\Livewire\Konseling\Semua::class)->name('konseling.semua');
        Route::get('/tambah', \App\Http\Livewire\Konseling\Tambah::class)->name('konseling.tambah');
        Route::get('/detail/{konseling}', \App\Http\Livewire\Konseling\Detail::class)->name('konseling.detail');
        Route::get('/edit/{konseling}', \App\Http\Livewire\Konseling\Edit::class)->name('konseling.edit');
    });

    Route::group(['prefix' => 'pelanggaran'], function (){
        Route::get('/', \App\Http\Livewire\Pelanggaran\Semua::class)->name('pelanggaran.semua');
        Route::get('/tambah', \App\Http\Livewire\Pelanggaran\Tambah::class)->name('pelanggaran.tambah');
        Route::get('/detail/{pelanggaran}', \App\Http\Livewire\Pelanggaran\Detail::class)->name('pelanggaran.detail');
        Route::get('/edit/{pelanggaran}', \App\Http\Livewire\Pelanggaran\Edit::class)->name('pelanggaran.edit');
    });
});
