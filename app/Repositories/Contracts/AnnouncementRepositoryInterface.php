<?php

namespace App\Repositories\Contracts;

use App\Http\Requests\AnnouncementRequest;

interface AnnouncementRepositoryInterface
{
    public function get($request);
    public function getToAdmin($request);
    public function count();
    public function store(AnnouncementRequest $request);
    public function show($slug);
    public function disable($id);
}
