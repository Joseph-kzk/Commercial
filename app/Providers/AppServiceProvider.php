<?php

namespace App\Providers;

use App\Helpers\AppHelpers;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if ( !$this->app->runningInConsole() ) {
            AppHelpers::checkPublicitesNotificationsAndSend();
            AppHelpers::checkAbonementsNotificationsAndSend();
        }
    }
}
