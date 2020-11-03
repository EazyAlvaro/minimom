<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\HMACService;
use App\Services\EventService;
use App\Interfaces\HMACInterface;
use App\Interfaces\EventInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            HMACInterface::class,
            HMACService::class
        );

        $this->app->bind(
            EventInterface::class,
            EventService::class
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
