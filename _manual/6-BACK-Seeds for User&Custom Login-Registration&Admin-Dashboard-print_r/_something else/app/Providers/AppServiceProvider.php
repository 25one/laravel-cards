<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\TypeComposer;
use Illuminate\Support\Facades\Blade;

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
       view()->composer('front/index', TypeComposer::class);

        Blade::if('admin', function () {
            return auth()->user()->role === 'admin';
        });

        //Blade::if('redac', function () {
        //    return auth()->user()->role === 'redac';
        //});                
    }
}
