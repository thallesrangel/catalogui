<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnouncementManagementPost extends Model
{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'announcement_management_post';

    protected $fillable = [
        'user_id',
        'announcement_id',
        'img_post',
        'title',
        'value',
        'flag_status'
    ];

    public function announcement()
    {
        return $this->belongsTo(Announcement::class, 'announcement_id');
    }
}
