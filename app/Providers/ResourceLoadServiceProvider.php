<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\ImageLoadService;

class ResourceLoadServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ImageLoadService::class, function($app){
            return new ImageLoadService();
        });
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
