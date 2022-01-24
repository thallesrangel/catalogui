<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('App\Repositories\Contracts\UserRepositoryInterface', 'App\Repositories\UserRepositoryEloquent');
        $this->app->bind('App\Repositories\Contracts\AnnouncementRepositoryInterface', 'App\Repositories\AnnouncementRepositoryEloquent');
        $this->app->bind('App\Repositories\Contracts\SearchAnnouncementRepositoryInterface', 'App\Repositories\SearchAnnouncementRepositoryEloquent');
        $this->app->bind('App\Repositories\Contracts\AnnouncementManagementPostRepositoryInterface', 'App\Repositories\AnnouncementManagementPostRepositoryEloquent');
        $this->app->bind('App\Repositories\Contracts\AnnouncementManagementCouponRepositoryInterface', 'App\Repositories\AnnouncementManagementCouponRepositoryEloquent');
        $this->app->bind('App\Repositories\Contracts\CategoryRepositoryInterface', 'App\Repositories\CategoryRepositoryEloquent');
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
