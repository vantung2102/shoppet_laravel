<?php

namespace App\Providers;

use App\View\Composers\MenuComposer;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        // Using class based composers...
        View::composer('header', MenuComposer::class);

        // Using closure based composers...
        View::composer('dashboard', function ($view) {
            //
        });
    }
}