<?php

namespace App\Http\Controllers;

use App\Services\SearchAnnouncementService;

class SearchController extends Controller
{
    protected $searchAnnouncementService;

    public function __construct(SearchAnnouncementService $searchAnnouncementService)
    {
        $this->searchAnnouncementService = $searchAnnouncementService;
    }

    public function index()
    {
        $announcement = $this->searchAnnouncementService->search([]);

        return view('public.search.index', [ 'data' => $announcement ]);
    }
}
