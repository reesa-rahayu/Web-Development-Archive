<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Pertanyaan extends Model
{
    use HasFactory;
    public function penanya(): BelongsTo
    {
        return $this->belongsTo(User::class, 'penanya_id');
    }
}
