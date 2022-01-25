<?php

namespace App\Http\Controllers;

use App\Http\Requests\SearchAnnouncementRequest;
use App\Services\SearchAnnouncementService;
use App\Services\CategoryService;
use App\Services\StateService;

class SearchController extends Controller
{
    protected $categoryService;
    protected $searchAnnouncementService;

    public function __construct(
        SearchAnnouncementService $searchAnnouncementService,
        CategoryService $categoryService,
        StateService $stateService,
        )
    {
        $this->searchAnnouncementService = $searchAnnouncementService;
        $this->categoryService = $categoryService;
        $this->stateService = $stateService;
    }

    public function index(SearchAnnouncementRequest $request)
    {
        $announcement = $this->searchAnnouncementService->search($request);
        $category = $this->categoryService->get();
        $states = $this->stateService->get();

        return view('public.search.index', [ 'data' => $announcement, 'category' => $category, 'states' => $states ]);
    }
}
