<?php

namespace App\Repositories\Contracts;

interface AnnouncementManagementCouponRepositoryInterface
{
    public function getCoupon($idAnnouncement);
    public function countCoupon();
    public function storeCoupon($request);
    public function disable($id);
}
