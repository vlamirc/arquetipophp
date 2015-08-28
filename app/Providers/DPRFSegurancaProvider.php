<?php namespace App\Providers;

use App\Auth\DPRFSegurancaServiceProvider;
use Illuminate\Support\ServiceProvider;

class DPRFSegurancaProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app['auth']->extend('dprfseguranca', function () {
            return new DPRFSegurancaServiceProvider();
        });
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
