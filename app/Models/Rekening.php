<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rekening extends Model
{
    use HasFactory;

    protected $guarded =    [];

    public static function boot()
    {
        parent::boot();
        self::creating(function ($model) {
            $model->dibuat_oleh = auth()->id();
        });

        self::updating(function ($model) {
            $model->diubah_oleh = auth()->id();
        });
    }

    public function santri()
    {
        return $this->belongsTo(Santri::class);
    }

    public function pembuat()
    {
        return $this->belongsTo(User::class,'dibuat_oleh');
    }
}
