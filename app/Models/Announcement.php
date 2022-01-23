<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'announcement';

    protected $fillable = [
        'user_id',
        'slug',
        'title',
        'description',
        'category_id',
        'subcategory_id',
        'img_profile',
        'img_card',
        'information',
        'title_main_link',
        'main_link',
        'email',
        'whatsapp',
        'tel',
        'facebook',
        'instagram',
        'site',
        'state_id',
        'city_id',
        'cep',
        'district',
        'street',
        'complement',
        'number',
        'flag_status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function category()
    {
        return $this->belongsTo(CategoryAnnouncement::class, 'category_id');
    }

    public function subCategory()
    {
        return $this->belongsTo(SubcategoryAnnouncement::class, 'subcategory_id');
    }
}
