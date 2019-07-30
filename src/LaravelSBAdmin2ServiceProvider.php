<?php

namespace Thegreyhatt\LaravelSBAdmin2;

use Illuminate\Support\ServiceProvider;

class LaravelSBAdmin2ServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->loadViewsFrom(__DIR__.'/views', 'sbadmin2');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
