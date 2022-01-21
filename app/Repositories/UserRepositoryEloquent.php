<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Contracts\UserRepositoryInterface;
Use Exception;


class UserRepositoryEloquent implements UserRepositoryInterface
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function store($request)
    {
        $user = new $this->user;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->document = $request->document;
        $user->role = 'common';
        $user->password = password_hash($request->password, PASSWORD_ARGON2ID);

        $user->save();

        return $user->fresh();
    }
}
