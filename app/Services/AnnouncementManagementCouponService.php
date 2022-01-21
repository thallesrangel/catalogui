<?php

namespace App\Services;

use App\Http\Requests\AnnouncementManagementCouponRequest;
use App\Repositories\Contracts\AnnouncementManagementCouponRepositoryInterface;

class AnnouncementManagementCouponService
{
    protected $announcementManagementCouponRepository;

    public function __construct(AnnouncementManagementCouponRepositoryInterface $announcementManagementCouponRepository)
    {
        $this->announcementManagementCouponRepository = $announcementManagementCouponRepository;
    }

    public function getCoupon($idAnnouncement)
    {
        return $this->announcementManagementCouponRepository->getCoupon($idAnnouncement);
    }

    public function storeCoupon(AnnouncementManagementCouponRequest $request)
    {
        return $this->announcementManagementCouponRepository->storeCoupon($request);
    }
}
