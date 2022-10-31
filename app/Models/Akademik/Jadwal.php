<?php

namespace App\Models\Akademik;

use App\Models\Kepegawaian\Guru;
use App\Models\Kesiswaan\Absensi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        static::created(function ($jadwal) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($jadwal)
                ->event('Menambah data jadwal')
                ->log("Menambahakan jadwal baru dengan {$jadwal->mapel->nama}");
        });

        static::created(function ($jadwal) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($jadwal)
                ->event('Mengubah Jadwal')
                ->log("Memperbarui jadwal {$jadwal->mapel->nama}");
        });

        static::deleted(function ($jadwal) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($jadwal)
                ->event('Menghapus Jadwal')
                ->log("Menghapus jadwal {$jadwal->mapel->nama}");
        });
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function data_presensi()
    {
        return $this->hasMany(Absensi::class,'jadwal_id','id');
    }

}
