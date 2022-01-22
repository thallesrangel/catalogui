<?php

namespace App\Http\Controllers;

use App\Http\Requests\AnnouncementFilterDashboardRequest;
use App\Services\AnnouncementService;

class DashboardController extends Controller
{
    protected $announcementService;

    public function __construct(AnnouncementService $announcementService)
    {
        $this->announcementService = $announcementService;
    }

    public function get(AnnouncementFilterDashboardRequest $request)
    {
        if (session('user.role') == 'admin') {
            $announcement = $this->announcementService->getToAdmin($request);
            
            return view('dashboard.dashboard-admin', ['data' => $announcement ]);
        }

        $announcement = $this->announcementService->get($request);
        $announcementCount = $this->announcementService->count();

        return view('dashboard.dashboard', ['data' => $announcement, 'announcementCount' => $announcementCount ]);
    }
}
