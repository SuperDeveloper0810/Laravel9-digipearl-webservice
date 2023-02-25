<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Pagination\Paginator;
use App\Models\Menu;
use App\Models\Contact_info;
use App\Models\Post;
use App\Models\Service;
use App\Models\Review;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        View::share(
            [
            'menus'=> Menu::all(), 
            'services'=>Service::all(), 
            'contactInfos'=>Contact_info::all(), 
            'posts'=>Post::all(),
            'reviews'=>Review::all()
            ]
        );
    }
}
