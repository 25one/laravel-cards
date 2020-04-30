<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\TypeComposer;
use App\Http\ViewComposers\UserComposer;
use App\Http\ViewComposers\CardComposer;
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
        view()->composer('back/cards/template', UserComposer::class); 
        view()->composer('back/cards/template', CardComposer::class);                 

        Blade::if('admin', function () {
            return auth()->user()->role === 'admin';
        });

        Blade::if('redac', function () {
            return auth()->user()->role === 'redac';
        });            
    }
}
