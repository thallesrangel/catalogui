<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AnnouncementManagementCoupon extends Model
{
    public $timestamps = false;
    protected $connection = 'mysql';
    protected $table = 'announcement_management_coupon';

    protected $fillable = [
        'user_id',
        'announcement_id',
        'name',
        'code',
        'description',
        'link',
        'flag_status'
    ];
    
    public function announcement()
    {
        return $this->belongsTo(Announcement::class, 'announcement_id');
    }
}
