<?php

namespace App\Http\Controllers;

use App\Services\AnnouncementManagementPostService;
use App\Services\announcementManagementCouponService;
use App\Http\Requests\AnnouncementManagementPostRequest;
use App\Http\Requests\AnnouncementManagementCouponRequest;

class AnnouncementManagementController extends Controller
{
    protected $announcementManagementPostService;
    protected $announcementManagementCouponService;

    public function __construct(
        AnnouncementManagementPostService $announcementManagementPostService,
        AnnouncementManagementCouponService $announcementManagementCouponService,)
    {
        $this->announcementManagementPostService = $announcementManagementPostService;
        $this->announcementManagementCouponService = $announcementManagementCouponService;
    }
    
    public function index($idAnnouncement)
    {
        $posts = $this->announcementManagementPostService->getPost($idAnnouncement);
        $coupons = $this->announcementManagementCouponService->getCoupon($idAnnouncement);

        return view('dashboard.management', [ 'posts' => $posts, 'coupons' => $coupons ]);
    }

    public function storePost(AnnouncementManagementPostRequest $request)
    {
        $idAnnouncement = $this->announcementManagementPostService->storePost($request);
        
        if (empty($idAnnouncement)) {
            return redirect()->route('management', $request->id )->with('warning', 'Atingiu o limite.');
        }

        return redirect()->route('management', $idAnnouncement )->with('success', 'Registrado com sucesso.');
    }

    public function storeCoupon(AnnouncementManagementCouponRequest $request)
    {
        $idAnnouncement = $this->announcementManagementCouponService->storeCoupon($request);

        return redirect()->route('management', $idAnnouncement )->with('success', 'Registrado com sucesso.');
    }

    public function disablePost($id)
    {
        $response = $this->announcementManagementPostService->disable($id);

        return redirect()->route('management', $response->announcement_id );
    }

    public function disableCoupon($id)
    {
        $response = $this->announcementManagementCouponService->disable($id);
        
        return redirect()->route('management', $response->announcement_id );
    }
}
