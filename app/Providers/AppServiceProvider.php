<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     */
    public function register()
    {
        if($this->app->environment() == 'local') {
            $this->app->register('\Laracademy\Generators\GeneratorsServiceProvider');
          //  $this->app->register('\GrahamCampbell\Exceptions\ExceptionsServiceProvider');
        }
    }
}
