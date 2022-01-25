<?php

namespace App\Repositories\Contracts;

use App\Http\Requests\SearchAnnouncementRequest;

interface SearchAnnouncementRepositoryInterface
{
    public function search($request);
}
