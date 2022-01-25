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

    public function search($request)
    {
        $announcement =  $this->announcement->where( 'flag_status', 'published' );

        if ($request->filled('category_id')) {
            $announcement->where('category_id', $request->category_id);
        }

        if ($request->filled('subcategory_id')) {
            $announcement->where('subcategory_id', $request->subcategory_id);
        }

        if ($request->filled('state_id')) {
            $announcement->where('state_id', $request->state_id);
        }

        if ($request->filled('city_id')) {
            $announcement->where('city_id', $request->city_id);
        }

        if ($request->filled('title')) {
            $announcement->where('title', 'like', '%' . $request->title . '%');
        }

        return $announcement->orderBy('id', 'DESC')
                            ->with('category')
                            ->with('subcategory')
                            ->get();
    }
}
