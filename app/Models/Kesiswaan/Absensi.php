<?php

namespace App\Models\Kesiswaan;

use App\Models\Akademik\Jadwal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::created(function ($absensi) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($absensi)
                ->event('Melakukan absensi')
                ->log("Mengabsen siswa {$absensi->siswa->nama}");
        });

        static::updated(function ($absensi) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($absensi)
                ->event('Memperbarui data absensi')
                ->log("Memperbarui data absensi {$absensi->siswa->nama}");
        });

        static::deleted(function ($absensi) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($absensi)
                ->event('Menghapus data absensi')
                ->log("Menghapus data absensi {$absensi->siswa->nama}");
        });
    }

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_id', 'id');
    }

    public function santri()
    {
        return $this->belongsTo(Santri::class, 'santri_id', 'id');
    }

}
