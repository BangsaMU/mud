<?php

namespace Bangsamu\Sso;

use Illuminate\Support\ServiceProvider;

class SsoPackageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
        $this->loadRoutesFrom(__DIR__.'/routes.php');
        $this->publishes([
            __DIR__.'/../resources/config/SsoConfig.php' => config_path('SsoConfig.php'),
        ]);
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'sso');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/sso'),
        ]);
    }
}
