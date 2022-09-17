<?php

namespace App\Models\Akademik;

use App\Models\Commons\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konseling extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->dibuat_oleh = auth()->id();
            $model->diubah_oleh = auth()->id();
        });

        static::updating(function ($model) {
            $model->diubah_oleh = auth()->id();
        });
    }

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }

    public function pelanggaran()
    {
        return $this->belongsTo(Pelanggaran::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'dibuat_oleh', 'id');
    }
}
