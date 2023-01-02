<?php

namespace App\Models\Akademik;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KriteriaKonseling extends Model
{
    use HasFactory;

    public static function boot()
    {
        parent::boot();
        static::created(function ($kreteria) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($kreteria)
                ->event('Menambah data kriteria pelanggaran')
                ->log("Menambahakan kriteria baru dengan nama {$kreteria->nama}");
        });

        static::updated(function ($kreteria) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($kreteria)
                ->event('Memperbarui kriteria pelanggaran')
                ->log("Memperbarui kriteria {$kreteria->mapel->nama}");
        });

        static::deleted(function ($kreteria) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($kreteria)
                ->event('Menghapus kriteria')
                ->log("Menghapus kriteria {$kreteria->mapel->nama}");
        });
    }

}
