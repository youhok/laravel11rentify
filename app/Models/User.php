<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    // Mass assignable attributes
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        // 'name',
        'email',
        // 'id_card',
        // 'profile_picture',
        'role_id',
        // 'social',
        'password',
    ];

    // Hidden attributes for serialization
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Casts for attributes
    protected $casts = [
        'email_verified_at' => 'datetime',
        // 'social' => 'array', // Ensure social field is cast as an array (JSON)
    ];

    // Define relationship to roles
    public function role()
    {
        return $this->belongsTo(Roles::class, 'role_id');
    }
}
