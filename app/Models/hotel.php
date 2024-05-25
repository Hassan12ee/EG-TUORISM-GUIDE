<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hotel extends Model
{
    use HasFactory;

    protected $fillable = [

        'NameH',
        'services',
        'imgpath',
        'smalldetails',
        'Stars',
        'Place-H',
        'GPS-H',
        'id',

    ];
}
