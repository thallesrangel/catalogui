<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'city';

    protected $fillable = [
        'name',
        'ibge_code',
        'state_id'
    ];

    public function state()
    {
        return $this->belongsTo(State::class, 'state_id');
    }
}