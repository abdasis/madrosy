<?php

namespace App\Models\Akademik;

use App\Models\Kesiswaan\Santri;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
    ];

    public function santri()
    {
        return $this->belongsToMany(Santri::class, 'kelas_santri');
    }
}
