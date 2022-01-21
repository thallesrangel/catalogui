<?php

namespace App\Repositories;

use App\Models\Announcement;
use App\Repositories\Contracts\AnnouncementRepositoryInterface;
use App\Traits\SlugValidationTrait;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Str;


class AnnouncementRepositoryEloquent implements AnnouncementRepositoryInterface
{
    use SlugValidationTrait;
    protected $user;

    public function __construct(Announcement $announcement)
    {
        $this->announcement = $announcement;
    }

    public function get($status)
    {
        return $this->announcement->where('user_id', session('user.id'))
                            ->where('flag_status', $status )
                            ->orderBy('id', 'DESC')
                            ->with('category')
                            ->with('subcategory')
                            ->get();
    }

    public function search()
    {
        return $this->announcement->where( 'flag_status', 'published' )
                            ->orderBy('id', 'DESC')
                            ->with('category')
                            ->with('subcategory')
                            ->get();
    }

    public function store($request)
    {
        $announcement = new $this->announcement;
        $announcement->user_id = session('user.id');
        $announcement->slug = time() . '-' . $this->slugValidation($request->title);
        $announcement->title = $request->title;
        $announcement->description = $request->description;
        $announcement->category_id = $request->category_id;
        $announcement->subcategory_id = $request->subcategory_id;

            // Profile Resize and Save
            $image = $request->file('img_profile');
            $input['img_profile'] = time() . '-profile-' . session('user.id') . '.'.$image->extension();
            $filePath = public_path('/img/thumbnails');
    
            $img = Image::make($image->path());
            $img->resize(180, 180, function ($const) {
                $const->aspectRatio();
            })->save($filePath.'/'.$input['img_profile']);
    
            $filePath = public_path('/img');
            $image->move($filePath, $input['img_profile']);

        $announcement->img_profile = $input['img_profile'];

            // Card Resize and Save
            $image = $request->file('img_card');
            $input['img_card'] = time() . '-card-' . session('user.id') . '.'.$image->extension();
            $filePath = public_path('/img/card');

            $img = Image::make($image->path());
            $img->resize(350, 250, function ($const) {
                $const->aspectRatio();
            })->save($filePath.'/'.$input['img_card']);

            $filePath = public_path('/img');
            $image->move($filePath, $input['img_card']);

        $announcement->img_card = $input['img_card'];

        $announcement->email = $request->email;
        $announcement->whatsapp = $request->whatsapp;
        $announcement->tel = $request->tel;
        $announcement->facebook = $request->facebook;
        $announcement->instagram = $request->instagram;
        $announcement->site = $request->site;
        $announcement->state_id = $request->state_id;
        $announcement->city_id = $request->city_id;
        $announcement->cep = $request->cep;
        $announcement->district = $request->district;
        $announcement->street = $request->street;
        $announcement->complement = $request->complement;
        $announcement->number = $request->number;
        $announcement->flag_status = "waiting";
        $announcement->created_at = \Carbon\Carbon::now();

        $announcement->save();

        return $announcement->fresh();
    }

    public function show($slug)
    {
        return $this->announcement->where('slug', $slug)
                                ->where('flag_status', 'published' )
                                ->orderBy('id', 'DESC')
                                ->with('category')
                                ->with('subcategory')
                                ->with('state')
                                ->first();
    }
}
