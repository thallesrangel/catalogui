<?php

namespace App\Services;

use App\Repositories\Contracts\SubCategoryRepositoryInterface;

class SubCategoryService
{
    protected $subCategoryRepository;

    public function __construct(SubCategoryRepositoryInterface $subCategoryRepository)
    {
        $this->subCategoryRepository = $subCategoryRepository;
    }

    public function getById($id)
    {
        return $this->subCategoryRepository->getById($id);
    }
}