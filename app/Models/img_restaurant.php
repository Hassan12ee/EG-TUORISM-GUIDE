<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class img_restaurant extends Model
{
    use HasFactory;
    protected $fillable=['restaurant_id','imgpath'  ];
    public $timestamps=false;
    public function restaurant(): BelongsTo
    {
        return $this->belongsTo(restaurant::class, 'restaurant_id', 'ID');
    }
}
