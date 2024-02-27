<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Dokumentasi extends Model
{
    use HasFactory;
    protected $table = 'dokumentasi';

    public function proker(): HasOne
    {
        return $this->hasOne(Proker::class);
    }
}
