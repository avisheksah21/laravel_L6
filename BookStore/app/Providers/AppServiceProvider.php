<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

use App\Models\Category;
use Illuminate\Support\Facades\View;

use Faker\Factory as FakerFactory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Paginator::useBootstrap();
        View::composer('*', function ($view) {
            $categories = Category::all(); // Fetch all categories
            $view->with('categories', $categories); // Pass categories to all views
        });
        $this->app->singleton(\Faker\Generator::class, function () {
            return FakerFactory::create('en_US');
        });
    }
}
