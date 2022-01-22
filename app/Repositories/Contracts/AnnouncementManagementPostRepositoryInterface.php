<?php

namespace App\Repositories\Contracts;

interface AnnouncementManagementPostRepositoryInterface
{
    public function getPost($idAnnouncement);
    public function countPost();
    public function storePost($request);
    public function disable($id);
}
