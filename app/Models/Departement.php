<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
    use HasFactory;

    protected $table = 'departement';

    public function anggota(): HasMany
    {
        return $this->hasMany(Anggota::class);
    }

    public function proker(): HasMany
    {
        return $this->hasMany(Proker::class);
    }
}
