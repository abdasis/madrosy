<?php

namespace App\Models\Kesiswaan;

use App\Models\Akademik\Kelas;
use App\Models\Commons\Avatar;
use App\Models\Commons\User;
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

    public function user()
    {
        return $this->belongsTo(User::class)->withDefault();
    }

    public function avatar()
    {
        return $this->morphOne(Avatar::class, 'avatarable')->withDefault();
    }
}
