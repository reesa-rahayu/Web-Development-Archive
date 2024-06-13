<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pejabat extends Model
{
    use HasFactory;
    public function surats(): HasMany
    {
        return $this->hasMany(Surat::class, 'penandatangan_id');
    }
}
