<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Surat extends Model
{
    use HasFactory;
    public function pengajuan(): HasMany
    {
        return $this->hasMany(Pengajuan::class, 'pengajuan_id');
    }
    public function penandatangan(): BelongsTo
    {
        return $this->belongsTo(Pejabat::class);
    }
    public function pemilik(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
