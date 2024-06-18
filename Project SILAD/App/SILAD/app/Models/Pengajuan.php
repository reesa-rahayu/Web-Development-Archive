<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengajuan extends Model
{
    protected $fillable = [
        'pemohon_id',
        'category_id',
        'waktu_konfirmasi',
        'status',
        'deskripsi',
    ];

    use HasFactory;

    public function pemohon(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function surats(): HasMany
    {
        return $this->hasMany(Surat::class);
    }
}
