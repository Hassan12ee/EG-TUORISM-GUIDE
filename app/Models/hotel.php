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
}
