<?php

namespace App\Services;

use App\Http\Requests\UserRequest;
use App\Repositories\Contracts\UserRepositoryInterface;

class UserService
{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function store(UserRequest $data)
    {
        $response = $this->userRepository->store($data);

        return $response;
    }
}