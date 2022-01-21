<?php

namespace App\Repositories\Contracts;

interface AnnouncementManagementPostRepositoryInterface
{
    public function getPost($idAnnouncement);
    public function storePost($request);
}
