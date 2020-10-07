<?php

namespace App\Providers;

use App\Models\Cat;
use App\Models\Muslim;
use App\Models\Page;
use Illuminate\Support\Facades\Schema;
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
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

       view()->share('categories' , Cat::whereHas('videos')->get());


        view()->share('muslims' , Muslim::whereHas('videos')->get());

        view()->share('pages',Page::limit(5)->get());


    }
}
