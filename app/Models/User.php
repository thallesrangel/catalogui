<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'user';

    protected $fillable = [
        'name',
        'email',
        'document',
        'state_id',
        'city_id',
        'role',
        'flag_status'
    ];

    protected $hidden = [
        'password'
    ];

    public function states()
    {
        return $this->belongsTo(State::class, 'state_id');
    }

    public function city()
    {
        return $this->belongsTo(City::class, 'city_id');
    }
}