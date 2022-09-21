<?php

namespace App\Models\Kesiswaan;

use App\Models\Akademik\Jadwal;
use App\Models\Akademik\Santri;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function jadwal()
    {
        return $this->belongsTo(Jadwal::class, 'jadwal_id', 'id');
    }

    public function santri()
    {
        return $this->belongsTo(Santri::class, 'santri_id', 'id');
    }

}
