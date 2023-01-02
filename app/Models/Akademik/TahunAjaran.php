<?php

namespace App\Models\Akademik;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunAjaran extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        static::created(function ($tahun_ajaran) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($tahun_ajaran)
                ->event('Menambah tahun ajaran')
                ->log("Menambahakan tahun ajaran baru {$tahun_ajaran->tahun_awal}/{$tahun_ajaran->tahun_akhir}");
        });

        static::updated(function ($tahun_ajaran) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($tahun_ajaran)
                ->event('Memperbarui tahun ajaran')
                ->log("Memperbarui tahun ajaran {$tahun_ajaran->tahun_awal}/{$tahun_ajaran->tahun_akhir}");
        });

        static::deleted(function ($tahun_ajaran) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($tahun_ajaran)
                ->event('Menghapus tahun ajaran')
                ->log("Menghapus tahun ajaran {$tahun_ajaran->tahun_awal}/{$tahun_ajaran->tahun_akhir}");
        });
    }

}
