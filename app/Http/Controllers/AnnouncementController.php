<?php

namespace App\Http\Controllers;
use App\Http\Requests\AnnouncementRequest;
use App\Services\AnnouncementService;
use App\Services\AnnouncementManagementPostService;
use App\Services\AnnouncementManagementCouponService;

class AnnouncementController extends Controller
{
    protected $announcementService;
    protected $announcementManagementPostService;
    protected $announcementManagementCouponService;

    public function __construct(
        AnnouncementService $announcementService,
        AnnouncementManagementPostService $announcementManagementPostService,
        AnnouncementManagementCouponService $announcementManagementCouponService
        )
    {
        $this->announcementService = $announcementService;
        $this->announcementManagementPostService = $announcementManagementPostService;
        $this->announcementManagementCouponService = $announcementManagementCouponService;
    }

    public function show($slug)
    {
        $announcement = $this->announcementService->show($slug);
        $posts = $this->announcementManagementPostService->getPost($announcement->id);
        $coupons = $this->announcementManagementCouponService->getCoupon($announcement->id);
        
        if (!$announcement) {
            return redirect(route('search'));
        }

        return view('public.announcement.index', ['data' => $announcement, 'posts' => $posts, 'coupons' => $coupons ]);
    }

    public function create()
    {
        return view('dashboard.announcement.create');
    }

    public function store(AnnouncementRequest $request)
    {
        try {
            $this->announcementService->store($request);
        } catch (\Exception $e) {
            return redirect()->route('announcement.create')->with('error', 'Ocorreu um erro. Verifique os campos.');
        }
        
        return redirect()->route('dashboard')->with('success', 'Registrado com sucesso.');
    }
}
