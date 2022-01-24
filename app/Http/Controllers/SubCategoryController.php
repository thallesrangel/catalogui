<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\SubCategoryService; 


class SubCategoryController extends Controller
{
    protected $subCategoryService;

    public function __construct(SubCategoryService $subCategoryService)
    {
        $this->subCategoryService = $subCategoryService;
    }

    public function getById(Request $request)
    {
        return $this->subCategoryService->getById($request->id);
    }
}
