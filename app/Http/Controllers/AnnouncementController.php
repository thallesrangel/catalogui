<?php

namespace App\Http\Controllers;
use App\Http\Requests\AnnouncementRequest;
use App\Services\AnnouncementService;
use App\Services\AnnouncementManagementPostService;
use App\Services\AnnouncementManagementCouponService;
use App\Services\CategoryService;
use App\Services\StateService;

class AnnouncementController extends Controller
{
    protected $announcementService;
    protected $announcementManagementPostService;
    protected $announcementManagementCouponService;

    public function __construct(
        AnnouncementService $announcementService,
        AnnouncementManagementPostService $announcementManagementPostService,
        AnnouncementManagementCouponService $announcementManagementCouponService,
        CategoryService $categoryService,
        StateService $stateService
        )
    {
        $this->announcementService = $announcementService;
        $this->announcementManagementPostService = $announcementManagementPostService;
        $this->announcementManagementCouponService = $announcementManagementCouponService;
        $this->categoryService = $categoryService;
        $this->stateService = $stateService;
    }

    public function show($slug)
    {
        $announcement = $this->announcementService->show($slug);
        
        if (empty($announcement->id)) {
            return redirect(abort(404));
        }

        $posts = $this->announcementManagementPostService->getPost($announcement->id);
        $coupons = $this->announcementManagementCouponService->getCoupon($announcement->id);
        
        if (!$announcement) {
            return redirect(route('search'));
        }

        if ($announcement->category_id == 12) {
            return view('public.announcement.event', ['data' => $announcement, 'posts' => $posts, 'coupons' => $coupons ]);
        } else {
            return view('public.announcement.index', ['data' => $announcement, 'posts' => $posts, 'coupons' => $coupons ]);
        }
    }

    public function create()
    {
        $category = $this->categoryService->get();
        $states = $this->stateService->get();
        
        return view('dashboard.announcement.create', [ 'category' => $category, 'states' => $states ]);
    }

    public function store(AnnouncementRequest $request)
    {
        try {
            $this->announcementService->store($request);
        } catch (\Exception $e) {
            return redirect()->route('announcement.create')->with('error', 'Ocorreu um erro. Verifique os campos.');
        }
        
        return redirect()->route('dashboard', ['status'=>'aguardando'])->with('success', 'Registrado com sucesso.');
    }

    public function approve($id)
    {
        $this->announcementService->approve($id);

        return redirect()->route('dashboard');
    }

    public function disable($id)
    {
        $this->announcementService->disable($id);

        return redirect()->route('dashboard');
    }
}
