<?php

namespace App\Repositories;

use App\Models\SubcategoryAnnouncement;
use App\Repositories\Contracts\SubCategoryRepositoryInterface;

class SubCategoryRepositoryEloquent implements SubCategoryRepositoryInterface
{
    protected $subCategory;

    public function __construct(SubcategoryAnnouncement $subCategory)
    {
        $this->subCategory = $subCategory;
    }

    public function getById($id)
    {
        return $this->subCategory->where('category_id', $id)->get();
    }
}
