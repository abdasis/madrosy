<?php

namespace App\Models\Kepegawaian;

use App\Models\Commons\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($guru) {
            $guru->dibuat_oleh = auth()->id() ?? 1;
            $guru->status = 'aktif';
        });

        static::updating(function ($guru) {
            $guru->diubah_oleh = auth()->id();
        });

        static::created(function ($guru) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($guru)
                ->event('Menambah guru')
                ->log("Menambahakan baru baru {$guru->nama}");
        });

        static::updated(function ($guru) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($guru)
                ->event('Memperbarui data guru')
                ->log("Memperbarui guru {$guru->nama}");
        });

        static::deleted(function ($guru) {
            $guru->user->delete();
            activity()
                ->causedBy(auth()->id())
                ->performedOn($guru)
                ->event('Menghapus data guru')
                ->log("Menghapus data guru {$guru->nama}");
        });
    }

    public function pendidikan()
    {
        return $this->hasOne(RiwayatPendidikan::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }
}
