<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecommendSave extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'restaurants_id',
        'tourist_places_id',
        'hotels_id',
    ];
    public $timestamps=false;

    // Specify the table if it doesn't follow the default naming convention
    protected $table = 'recommendsave';
}
