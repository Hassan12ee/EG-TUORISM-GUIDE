<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tourist_place extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'IDT',
        'T-name',
        'small_details',
        'imgpath',
        'T-Ticket',
        'details',
        'web-booking'
    ];
    public $timestamps = false;
}
