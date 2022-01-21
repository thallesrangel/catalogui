<?php

namespace App\Services;

use App\Http\Requests\AnnouncementManagementPostRequest;
use App\Repositories\Contracts\AnnouncementManagementPostRepositoryInterface;

class AnnouncementManagementPostService
{
    protected $announcementManagementPostRepository;

    public function __construct(AnnouncementManagementPostRepositoryInterface $announcementManagementPostRepository)
    {
        $this->announcementManagementPostRepository = $announcementManagementPostRepository;
    }

    public function getPost($idAnnouncement)
    {
        return $this->announcementManagementPostRepository->getPost($idAnnouncement);
    }

    public function storePost(AnnouncementManagementPostRequest $request)
    {
        return $this->announcementManagementPostRepository->storePost($request);
    }
}
