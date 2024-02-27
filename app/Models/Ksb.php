<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Ksb extends Model
{
    use HasFactory;

    public function ksb(): HasOne
    {
        return $this->hasOne(Ksb::class);
    }
}
