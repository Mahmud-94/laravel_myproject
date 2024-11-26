<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Expert extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'details',

    ];

    public function agent(){
        return $this->hasMany(Agent::class);
    }
}
