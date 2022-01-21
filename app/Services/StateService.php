<?php

namespace App\Services;

use App\Repositories\StateRepository;

class StateService
{
    protected $stateRepository;

    public function __construct(StateRepository $stateRepository)
    {
        $this->stateRepository = $stateRepository;
    }

    public function get()
    {
        return $this->stateRepository->get();
    }
}
