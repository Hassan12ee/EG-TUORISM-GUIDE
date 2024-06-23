<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_tourist_places extends Model
{
    use HasFactory;
    protected $fillable=['tourist_place_id','user_id'  ];
    public $timestamps=false;
}
