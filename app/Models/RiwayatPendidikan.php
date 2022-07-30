<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Utils;

class RiwayatPendidikan extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($guru) {
            $guru->dibuat_oleh = auth()->id() ?? 1;
        });

        static::updating(function ($guru) {
            $guru->diubah_oleh = auth()->id();
        });

    }

    public function guru()
    {
        return $this->belongsTo(Guru::class, 'guru_id', 'id');
    }

}
