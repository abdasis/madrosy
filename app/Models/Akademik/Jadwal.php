<?php

namespace App\Models\Akademik;

use App\Models\Kepegawaian\Guru;
use App\Models\Kesiswaan\Absensi;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class);
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }

    public function data_presensi()
    {
        return $this->hasMany(Absensi::class,'jadwal_id','id');
    }

}
