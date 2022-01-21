<?php

namespace App\Http\Controllers;

use App\Services\SearchAnnouncementService;
use App\Services\StateService;

class SearchController extends Controller
{
    protected $searchAnnouncementService;

    public function __construct(SearchAnnouncementService $searchAnnouncementService, StateService $stateService)
    {
        $this->searchAnnouncementService = $searchAnnouncementService;
        $this->stateService = $stateService;
    }

    public function index()
    {
        $announcement = $this->searchAnnouncementService->search([]);
        $states = $this->stateService->get();

        return view('public.search.index', [ 'data' => $announcement, 'states' => $states ]);
    }
}
