<?php

namespace App\Services;

use App\Http\Requests\AnnouncementManagementCouponRequest;
use App\Repositories\Contracts\AnnouncementManagementCouponRepositoryInterface;
use InvalidArgumentException;

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

    public function disable($id)
    {
        try{
            $this->announcementManagementCouponRepository->disable($id);
        } catch(\Exception $e) {
            throw new InvalidArgumentException('Não foi possível deletar o registro');
        }
        
        return redirect()->route('dashboard')->with("success", "Registro excluído com sucesso");
    }
}
