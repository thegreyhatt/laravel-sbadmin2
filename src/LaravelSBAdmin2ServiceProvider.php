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

        $viewsPath = $this->packagePath('resources/views');
        $this->loadViewsFrom($viewsPath, 'sbadmin2');

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

    private function packagePath($path)
    {
        return __DIR__."/../$path";
    }
}
