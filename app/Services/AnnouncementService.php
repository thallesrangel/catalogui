<?php

namespace App\Services;

use App\Http\Requests\AnnouncementRequest;
use App\Repositories\Contracts\AnnouncementRepositoryInterface;

class AnnouncementService
{
    protected $announcementRepository;

    public function __construct(AnnouncementRepositoryInterface $announcementRepository)
    {
        $this->announcementRepository = $announcementRepository;
    }

    public function get($request)
    {
        $status = match($request->status) {
            'aguardando' => 'waiting',
            'inativado' => 'iantivad',
            'expirado' => 'expired',
            default => 'published'
        };

        return $this->announcementRepository->get($status);
    }

    public function store(AnnouncementRequest $data)
    {
        $response = $this->announcementRepository->store($data);

        return $response;
    }

    public function show($slug)
    {
        return $this->announcementRepository->show($slug);
    }
}