<?php

namespace App\Http\Controllers;

use App\Services\CategoryService;
use App\Services\StateService;

class HomeController extends Controller
{
    protected $categoryService;
    protected $stateService;

    public function __construct(
        CategoryService $categoryService,
        StateService $stateService
        )
    {
        $this->categoryService = $categoryService;
        $this->stateService = $stateService;
    }

    public function index()
    {
        $category = $this->categoryService->get();
        $states = $this->stateService->get();
        
        return view('public.home.index',  [ 'category' => $category, 'states' => $states ]);
    }
}
