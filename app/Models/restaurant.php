<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;
use App\Models\img_restaurant;
class restaurant extends Model
{
    use HasFactory;

    protected $fillable =
    [   'id',
        'name',
        'small_details',
        'imgpath',
        'type-food',
        'stars',
        'place',
        'gps-r',
        ];

        public $timestamps = false;
        public function img_restaurant()
        {
            return $this->hasMany(img_restaurant::class, 'restaurant_id', 'ID');
        }

        /**
         * The users that belong to the restaurant
         *
         * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
         */
        public function users(): BelongsToMany
        {
            return $this->belongsToMany(user::class, 'users_restaurants', 'user_id', 'restaurant_id');
        }
}
