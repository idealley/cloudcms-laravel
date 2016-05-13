<?php

namespace Idealley\CloudCms;

use Illuminate\Support\ServiceProvider;

class CloudCmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/../../routes.php';

        $this->publishes([
            __DIR__.'/../../config/config.php' => config_path('cloudcms.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
