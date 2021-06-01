<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\View;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::share('postsLatest', $posts = Post::limit(5)->orderBy('created_at', 'DESC')->get());

        View::share('navCategories', $categories = Category::with('children')->whereNull('category_id')->get());
    }
}
