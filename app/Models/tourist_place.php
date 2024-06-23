<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tourist_place extends Model
{
    use HasFactory;

    protected $fillable =

    [
        'ID',
        'Place',
        'Type',
        'imgpath',
        'Region',
        'Rating',
        'Popularity',
        'Opening_Hours',
        'Budget',
        'Activity_Level',
        'Indoor_Outdoor',
    ];
    public $timestamps = false;
    public function img_tourist_place()
    {
        return $this->hasMany(img_tourist_place::class, 'tourist_place_id', 'ID');
    }
    public function users(): BelongsToMany
        {
            return $this->belongsToMany(user::class, 'users_tourist_places', 'user_id', 'tourist_place_id');
        }
}
