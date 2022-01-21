<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CategoryAnnouncement extends Model
{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'category_announcement';

    protected $fillable = [
        'name',
    ];
}