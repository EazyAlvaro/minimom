<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\HMACService;
use App\Services\EventService;
use App\Services\InviteService;
use App\Interfaces\HMACInterface;
use App\Interfaces\EventInterface;
use App\Interfaces\InviteInterface;

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

        $this->app->bind(
            InviteInterface::class,
            InviteService::class
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
