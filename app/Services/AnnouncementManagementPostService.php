<?php

namespace App\Services;

use App\Http\Requests\AnnouncementManagementPostRequest;
use App\Repositories\Contracts\AnnouncementManagementPostRepositoryInterface;
use App\Traits\PostLimitTrait;
use InvalidArgumentException;

class AnnouncementManagementPostService
{
    use PostLimitTrait;
    protected $announcementManagementPostRepository;

    public function __construct(AnnouncementManagementPostRepositoryInterface $announcementManagementPostRepository)
    {
        $this->announcementManagementPostRepository = $announcementManagementPostRepository;
    }

    public function getPost($idAnnouncement)
    {
        return $this->announcementManagementPostRepository->getPost($idAnnouncement);
    }

    public function countPost()
    {
        return $this->announcementManagementPostRepository->countPost();
    }

    public function storePost(AnnouncementManagementPostRequest $request)
    {
        if (!$this->checkPostLimit($this->countPost())) {
            return $this->announcementManagementPostRepository->storePost($request);
        } 
    }

    public function disable($id)
    {
        try{
            return $this->announcementManagementPostRepository->disable($id);
        } catch(\Exception $e) {
            throw new InvalidArgumentException('Não foi possível deletar o registro');
        }
    }
}
