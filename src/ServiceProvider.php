<?php

namespace Thegreyhatt\LaravelSBAdmin2;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
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
        $this->loadViews();

        $this->publishConfig();

        $this->publishAssets();
        
    }

    private function loadViews()
    {
        $viewsPath = $this->packagePath('resources/views');

        $this->loadViewsFrom($viewsPath, 'adminlte');

        $this->publishes([
            $viewsPath => base_path('resources/views/vendor/sbadmin2'),
        ], 'views');
    }

    private function publishConfig()
    {
        $configPath = $this->packagePath('config/sbadmin2.php');

        $this->publishes([
            $configPath => config_path('sbadmin2.php'),
        ], 'config');

        $this->mergeConfigFrom($configPath, 'sbadmin2');
    }


    private function publishAssets()
    {
        $this->publishes([
            $this->packagePath('resources/assets') => public_path('vendor/sbadmin2'),
        ], 'assets');
    }

    private function packagePath($path)
    {
        return __DIR__."/../$path";
    }
}
