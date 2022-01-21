<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\CityService; 


class CityController extends Controller
{
    protected $cityService;

    public function __construct(CityService $cityService)
    {
        $this->cityService = $cityService;
    }

    public function getById(Request $request)
    {
        return $this->cityService->getById($request->id);
    }
}