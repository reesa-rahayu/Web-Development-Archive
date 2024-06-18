<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pengajuan extends Model
{
    protected $fillable = [
        'pemohon_id',
        'category_id',
        'waktu_konfirmasi',
        'status',
        'deskripsi'
    ];

    use HasFactory;

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }
    public function surat(): BelongsTo
    {
        return $this->belongsTo(Surat::class);
    }
}
