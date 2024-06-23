<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\models\hotel;
use App\models\restaurant;
use App\models\tourist_place;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'user',
        'name',
        'lastname',
        'email',
        'password',
        'birthday',
        'phone',


    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];
    public function hotel(): BelongsToMany
        {
            return $this->belongsToMany(hotel::class, 'users_hotels', 'hotel_id','user_id', );
        }
        public function tourist_place(): BelongsToMany
        {
            return $this->belongsToMany(tourist_place::class, 'users_tourist_places','tourist_places_id','user_id');
        }
        public function restaurant(): BelongsToMany
        {
            return $this->belongsToMany(restaurant::class, 'users_restaurants','restaurants_id','user_id');
        }
}
