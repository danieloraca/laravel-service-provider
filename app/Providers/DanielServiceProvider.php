<?php

namespace App\Providers;

use App\Library\Services\DemoOne;
use App\Library\Services\Contracts\CustomServiceInterface;
use Illuminate\Support\ServiceProvider;

class DanielServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(CustomServiceInterface::class, function($app) {
            return new DemoOne();
        });
    }
}
