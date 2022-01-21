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
}