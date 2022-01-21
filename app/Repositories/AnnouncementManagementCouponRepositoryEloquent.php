<?php

namespace App\Repositories;

use App\Models\AnnouncementManagementCoupon;
use App\Repositories\Contracts\AnnouncementManagementCouponRepositoryInterface;

class AnnouncementManagementCouponRepositoryEloquent implements AnnouncementManagementCouponRepositoryInterface
{
    protected $announcementManagementCoupon;

    public function __construct(AnnouncementManagementCoupon $announcementManagementCoupon)
    {
        $this->announcementManagementCoupon = $announcementManagementCoupon;
    }

    public function getCoupon($idAnnouncement)
    {
        return $this->announcementManagementCoupon->where( 'announcement_id', $idAnnouncement )
                                                ->where( 'flag_status', 'enabled' )
                                                ->orderBy('id', 'DESC')
                                                ->get();
    }

    public function storeCoupon($request)
    {
        $announcementManagementCoupon = new $this->announcementManagementCoupon;
        $announcementManagementCoupon->user_id = session('user.id');
        $announcementManagementCoupon->announcement_id = $request->announcement_id;
        $announcementManagementCoupon->name = $request->name;
        $announcementManagementCoupon->code = $request->code;
        $announcementManagementCoupon->description = $request->description;
        $announcementManagementCoupon->link = $request->link;
        $announcementManagementCoupon->flag_status = "enabled";

        $announcementManagementCoupon->save();
   
        return $request->announcement_id;
    }

    public function disable($id)
    {
        $announcementManagementCoupon = $this->announcementManagementCoupon->where('user_id', session('user.id'))->find($id);
        $announcementManagementCoupon->update(['flag_status' => "inactivated" ]);

        return $announcementManagementCoupon;
    }
}
