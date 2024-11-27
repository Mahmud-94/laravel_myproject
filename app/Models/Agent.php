<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Agent extends Authenticatable
{
    use HasApiTokens, HasFactory;


    protected $guard = 'agent';

    protected $fillable = [
        'name',
        'email',
        'password',
        'expert_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'password' => 'hashed',
    ];
    public function expert(){
        return $this->belongsTo(Expert::class);
    }
}
