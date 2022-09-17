<?php

namespace App\Models\Akademik;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggaran extends Model
{
    use HasFactory;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->dibuat_oleh = auth()->user()->id;
            $model->diedit_oleh = auth()->user()->id;
        });

        self::updating(function ($model) {
            $model->diedit_oleh = auth()->user()->id;
        });
    }

    public function konseling()
    {
        return $this->hasOne(Konseling::class);
    }
}
