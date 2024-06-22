<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
