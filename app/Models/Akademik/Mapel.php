<?php

namespace App\Models\Akademik;

use App\Models\Commons\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        static::created(function ($mapel) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($mapel)
                ->event('Menambah mapel')
                ->log("Menambahakan mapel baru dengan nama {$mapel->nama}");
        });

        static::updated(function ($mapel) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($mapel)
                ->event('Memperbarui mapel')
                ->log("Memperbarui mapel {$mapel->nama}");
        });

        static::deleted(function ($mapel) {
            activity()
                ->causedBy(auth()->id())
                ->performedOn($mapel)
                ->event('Menghapus mapel')
                ->log("Menghapus mapel {$mapel->nama}");
        });
    }


    public function pembuat()
    {
        return $this->belongsTo(User::class, 'dibuat_oleh');
    }
}
