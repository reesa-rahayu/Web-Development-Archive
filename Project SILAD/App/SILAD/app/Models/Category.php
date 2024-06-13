<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Category extends Model
{
    use HasFactory;
    public function pengajuans(): HasMany
    {
        return $this->hasMany(Pengajuan::class, 'category_id');
    }
    public function surats(): HasMany
    {
        return $this->hasMany(Surat::class, 'category_id');
    }
}
