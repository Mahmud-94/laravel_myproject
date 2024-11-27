<?php
namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Property extends Authenticatable
{
    use HasApiTokens, HasFactory;




    protected $fillable = [
        'title',
        'ptype',
        'bedroom',
        'bathroom',
        'balcony',
        'kitchen',
        'size',
        'price',
        'location',
        'status',
    ];




}
