<?php

namespace App\Repositories;

use App\Models\AnnouncementManagementPost;
use App\Repositories\Contracts\AnnouncementManagementPostRepositoryInterface;
use Exception;
use Intervention\Image\Facades\Image;

class AnnouncementManagementPostRepositoryEloquent implements AnnouncementManagementPostRepositoryInterface
{
    protected $announcementManagementPost;

    public function __construct(AnnouncementManagementPost $announcementManagementPost)
    {
        $this->announcementManagementPost = $announcementManagementPost;
    }

    public function getPost($idAnnouncement)
    {
        return $this->announcementManagementPost->where( 'announcement_id', $idAnnouncement )
                                                ->where( 'flag_status', 'enabled' )
                                                ->orderBy('id', 'DESC')
                                                ->get();
    }

    public function storePost($request)
    {
        $announcementManagementPost = new $this->announcementManagementPost;
        $announcementManagementPost->user_id = session('user.id');
        $announcementManagementPost->announcement_id = $request->announcement_id;
        $announcementManagementPost->title = $request->title;
        $announcementManagementPost->value = $request->value;

            $image = $request->file('img_post');
            $input['img_post'] = time() . '-post-' . session('user.id') . '.'.$image->extension();
            $filePath = public_path('/img/post');
    
            $img = Image::make($image->path());
            $img->resize(300, 300, function ($const) {
                $const->aspectRatio();
            })->save($filePath.'/'.$input['img_post']);
    
            $filePath = public_path('/img');
            $image->move($filePath, $input['img_post']);

        $announcementManagementPost->img_post = $input['img_post'];
        $announcementManagementPost->flag_status = "enabled";

        $announcementManagementPost->save();
   
        return $request->announcement_id;
    }
}
