<?php

namespace App\Repositories\Contracts;

interface AnnouncementManagementCouponRepositoryInterface
{
    public function getCoupon($idAnnouncement);
    public function storeCoupon($request);
}
