<?php

namespace Someline\Image;


use Illuminate\Support\ServiceProvider;

class SomelineImageServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__ . '/../../migrations');
        $this->publishes([
            __DIR__ . '/../../config/config.php' => config_path('someline-image.php'),

            // master files
            __DIR__ . '/../../master/SomelineImage.php.dist' => app_path('Models/Image/SomelineImage.php'),

        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/config.php',
            'someline-image'
        );
    }
}