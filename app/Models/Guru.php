<?php

namespace App\Models;

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

        static::deleted(function ($guru){
            $guru->user->delete();
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
