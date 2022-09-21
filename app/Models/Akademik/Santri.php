<?php

namespace App\Models\Akademik;

use App\Models\Kesiswaan\Absensi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function kelas()
    {
        return $this->belongsToMany(Kelas::class, 'kelas_santri');
    }

    public function data_absensi()
    {
        return $this->hasMany(Absensi::class, 'santri_id', 'id');
    }
}
