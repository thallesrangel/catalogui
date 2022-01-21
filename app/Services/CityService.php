<?php

namespace App\Services;

use App\Repositories\Contracts\CityRepositoryInterface;

class CityService
{
    protected $cityRepository;

    public function __construct(CityRepositoryInterface $cityRepository)
    {
        $this->cityRepository = $cityRepository;
    }

    public function getById($id)
    {
        return $this->cityRepository->getById($id);
    }
}