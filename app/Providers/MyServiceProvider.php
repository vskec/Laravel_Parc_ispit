<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MyServiceProvider extends ServiceProvider
{
       public function register() : void
    {
        $this->app->singleton(\App\Service::class);
    }

    public function boot() : void {

    }
}
