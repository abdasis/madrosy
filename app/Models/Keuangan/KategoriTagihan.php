<?php

namespace App\Models\Keuangan;

use App\Models\Akademik\TahunAjaran;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriTagihan extends Model
{
    use HasFactory;

    protected $guarded = [];
    public static function boot()
    {
        parent::boot(); // TODO: Change the autogenerated stub
        parent::creating(function ($model) {
            $model->dibuat_oleh = auth()->id();
            $model->diubah_oleh = auth()->id();
            $model->status = 'aktif';
        });

        parent::updating(function ($model) {
            $model->diubah_oleh = auth()->id();
        });
    }

    public function tapel() //relasi untuk tahun pelajaran
    {
        return $this->belongsTo(TahunAjaran::class, 'tahun_ajaran_id');
    }
}