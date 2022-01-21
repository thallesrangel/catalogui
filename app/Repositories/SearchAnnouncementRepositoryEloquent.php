<?php

namespace App\Repositories;

use App\Models\Announcement;
use App\Repositories\Contracts\SearchAnnouncementRepositoryInterface;
use Exception;

class SearchAnnouncementRepositoryEloquent implements SearchAnnouncementRepositoryInterface
{
    protected $user;

    public function __construct(Announcement $announcement)
    {
        $this->announcement = $announcement;
    }

    public function search()
    {
        return $this->announcement->where( 'flag_status', 'published' )
                            ->orderBy('id', 'DESC')
                            ->with('category')
                            ->with('subcategory')
                            ->get();
    }
}
