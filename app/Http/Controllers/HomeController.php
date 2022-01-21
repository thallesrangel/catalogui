<?php

namespace App\Http\Controllers;

use App\Services\StateService;

class HomeController extends Controller
{
    protected $stateService;

    public function __construct(StateService $stateService)
    {
        $this->stateService = $stateService;
    }

    public function index()
    {
        $states = $this->stateService->get();
        
        return view('public.home.index',  [ 'states' => $states ]);
    }
}
