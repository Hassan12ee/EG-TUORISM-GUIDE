<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class img_hotel extends Model
{
    use HasFactory;
    protected $fillable=['hotel_id','imgpath'  ];
    protected $hidden =['hotel_id'];
    public $timestamps=false;
    /**
     * Get the hotel that owns the img_hotel
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function hotel(): BelongsTo
    {
        return $this->belongsTo(hotel::class, 'hotel_id', 'ID');
    }
}
