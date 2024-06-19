<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'NIK',
        'alamat',
        'kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'NIK'
    ];

    protected $guard = 'web';
    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function pengajuan(): HasMany
    {
        return $this->hasMany(Pengajuan::class);
    }
    public function pertanyaan(): HasMany
    {
        return $this->hasMany(Pertanyaan::class);
    }
    public function surat(): HasMany
    {
        return $this->hasMany(Surat::class);
    }

    public function isAdmin(): bool
    {
        return $this->is_admin;
    }
}
