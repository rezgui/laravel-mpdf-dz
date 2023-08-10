<?php

namespace Rezgui\LaravelMpdfDz;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\ServiceProvider;

class LaravelMpdfDzServiceProvider extends ServiceProvider
{

    /**
     * Boot the service provider
     * 
     * @return void
     */

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/pdf.php' => config_path("pdf.php"),
        ], "mpdf-config");
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/pdf.php',
            'pdf'
        );

        $this->app->bind('laravel-mpdf-dz', function ($app) {
            return new LaravelMpdfDzWrapper();
        });
    }
}
