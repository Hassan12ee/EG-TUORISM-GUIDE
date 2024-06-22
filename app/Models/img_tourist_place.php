<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class img_tourist_place extends Model
{
    use HasFactory;
    protected $fillable=['tourist_place_id','imgpath'  ];
    public $timestamps=false;
    public function tourist_place(): BelongsTo
    {
        return $this->belongsTo(tourist_place::class, 'tourist_place_id', 'ID');
    }
}

