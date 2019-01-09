<?php

namespace Mydnic\AllowLongRequests;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class AllowLongRequestsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any package services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPublishing();
    }

    /**
     * Register the package's publishable resources.
     *
     * @return void
     */
    protected function registerPublishing()
    {
        $this->publishes([
            __DIR__ . '/../config/allow-long-requests.php' => config_path('allow-long-requests.php'),
        ], 'config');
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/allow-long-requests.php',
            'allow-long-requests'
        );
    }
}
