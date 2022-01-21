<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubcategoryAnnouncement extends Model
{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'subcategory_announcement';

    protected $fillable = [
        'name',
        'category_id'
    ];

    public function category()
    {
        return $this->belongsTo(CategoryAnnouncement::class, 'category_id');
    }
}