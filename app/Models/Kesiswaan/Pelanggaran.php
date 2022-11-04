<?php

namespace App\Models\Kesiswaan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        static::created(function ($pelanggaran) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($pelanggaran)
                ->event('Menambah Pelanggaran')
                ->log("Menambahakan pelanggaran baru dengan nama {$pelanggaran->kasus}");
        });

        static::updated(function ($pelanggaran) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($pelanggaran)
                ->event('Memperbarui pelanggaran')
                ->log("Memperbarui pelanggaran dengan nama {$pelanggaran->kasus}");
        });

        static::deleted(function ($pelanggaran) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($pelanggaran)
                ->event('Menghapus pelanggaran')
                ->log("Menghapus pelanggaran {$pelanggaran->kasus}");
        });
    }

    public function konseling()
    {
        return $this->hasOne(Konseling::class);
    }
}
