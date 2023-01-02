<?php

namespace App\Models\Kesiswaan;

use App\Models\Akademik\Kelas;
use App\Models\Commons\Avatar;
use App\Models\Commons\User;
use App\Models\Keuangan\Tagihan;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::updated(function ($santri) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($santri)
                ->event('Memperbarui data Santri')
                ->log("Memperbarui santri {$santri->nama_lengkap}");
        });

        static::created(function ($santri) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($santri)
                ->event('Menambah Santri')
                ->log("Menambahakan santri baru {$santri->nama_lengkap}");
        });

        static::deleted(function ($santri) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($santri)
                ->event('Menghapus data santri')
                ->log("Menghapus data santri {$santri->nama_lengkap}");
        });
    }

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'kelas_santri');
    }

    public function data_absensi()
    {
        return $this->hasMany(Absensi::class, 'santri_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function avatar()
    {
        return $this->morphOne(Avatar::class, 'avatarable')->latest()->withDefault();
    }

    public function tagihan()
    {
        return $this->hasMany(Tagihan::class , 'santri_id', 'id');
    }
}
