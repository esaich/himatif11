<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Anggota extends Model
{
    use HasFactory;
    
    protected $table = 'anggota';

    public function departement(): HasOne
    {
        return $this->hasOne(Departement::class);
    }

    public function ksb(): HasOne
    {
        return $this->hasOne(Ksb::class);
    }

}