<?php

namespace App\Models\Commons;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function avatarable()
    {
        return $this->morphTo();
    }
}
