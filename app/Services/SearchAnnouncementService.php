<?php

namespace App\Services;

use App\Http\Requests\AnnouncementRequest;
use App\Repositories\Contracts\SearchAnnouncementRepositoryInterface;

class SearchAnnouncementService
{
    protected $searchAnnouncementRepository;

    public function __construct(SearchAnnouncementRepositoryInterface $searchAnnouncementRepository)
    {
        $this->searchAnnouncementRepository = $searchAnnouncementRepository;
    }

    public function search()
    {
        return $this->searchAnnouncementRepository->search();
    }
}
