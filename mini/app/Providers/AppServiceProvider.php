<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Services\HMACService;
use App\Interfaces\HMACInterface;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->bindService(
            HMACInterface::class,
            HMACService::class
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
