<?php

namespace App\Repositories\Contracts;

use App\Http\Requests\AnnouncementRequest;

interface AnnouncementRepositoryInterface
{
    public function get($request);
    public function store(AnnouncementRequest $request);
    public function show($slug);
}
