<?php

namespace App\Models;
use App\Models\img_hotel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    use HasFactory;

    protected $fillable = [
        'ID',
        'Hotels',
        'Type',
        'Region',
        'Rating',
        'Popularity',
        'Opening_Hours',
        'Budget',
        'Facilities',
        'imgpath',


    ];
    public $timestamps = false;


    /**
     * Get all of the comments for the hotel
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function img_hotel()
    {
        return $this->hasMany(img_hotel::class, 'hotel_id', 'ID');
    }
    public function users(): BelongsToMany
        {
            return $this->belongsToMany(user::class, 'users_hotels', 'user_id', 'hotel_id');
        }
        public function fevusers(): BelongsToMany
        {
            return $this->belongsToMany(user::class, 'fev_hotels', 'user_id', 'hotels_id');
        }
}
