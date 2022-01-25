<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class HighLightPlan extends Model
{
    protected $table = "highlightplan";
    protected $fillable = [ 
        'name',
        'price',
        'expiration_date'
    ];
}