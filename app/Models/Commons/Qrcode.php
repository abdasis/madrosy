<?php

namespace App\Models\Commons;

use App\Models\Akademik\Kelas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qrcode extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id', 'id')->orderBy('created_at');
    }
}
