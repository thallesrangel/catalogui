<?php

namespace App\Repositories;

use App\Models\CategoryAnnouncement;
use App\Repositories\Contracts\CategoryRepositoryInterface;

class CategoryRepositoryEloquent implements CategoryRepositoryInterface
{
    protected $category;

    public function __construct(CategoryAnnouncement $category)
    {
        $this->category = $category;
    }

    public function get()
    {
        return $this->category->orderBy('id', 'ASC')->get();
    }
}
