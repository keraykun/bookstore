<?php

namespace App\Providers;
use App\Models\Genre;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
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

        View::composer(['layouts.home-layout', 'home'], function($view){
            $genres = Genre::select('id','name')->get();
            return $view->with('genres', $genres);
        });
    }
}
