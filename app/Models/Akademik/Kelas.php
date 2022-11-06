<?php

namespace App\Models\Akademik;

use App\Models\Commons\Qrcode;
use App\Models\Kepegawaian\Guru;
use App\Models\Kesiswaan\Santri;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];

    public static function boot()
    {
        parent::boot();
        static::created(function ($kelas) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($kelas)
                ->event('Menambah data kelas')
                ->log("Menambahakan kelas baru dengan nama {$kelas->nama_kelas}");
        });

        static::updated(function ($kelas) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($kelas)
                ->event('Memperbarui kelas')
                ->log("Memperbarui kelas {$kelas->nama_kelas}");
        });

        static::deleted(function ($kelas) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($kelas)
                ->event('Menghapus kelas')
                ->log("Menghapus kelas {$kelas->nama_kelas}");
        });
    }

    public function jadwal()
    {
        return $this->hasOne(Jadwal::class, 'kelas_id', 'id')->withDefault();
    }

    public function santri()
    {
        return $this->belongsToMany(Santri::class, 'kelas_santri');
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'wali_kelas', 'id');
    }

    public function qrcodes()
    {
        return $this->hasMany(Qrcode::class, 'kelas_id', 'id')->latest();
    }
}
