<?php

namespace App\Models\Keuangan;

use App\Models\Commons\User;
use App\Models\Kesiswaan\Santri;
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
            $model->dibuat_oleh = auth()->id() ?? 1;
        });

        self::updating(function ($model) {
            $model->diubah_oleh = auth()->id() ?? 1;
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
