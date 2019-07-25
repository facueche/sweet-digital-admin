<?php

namespace DebianMoor\SweetDigitalAdmin;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;

class SweetDigitalAdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('DebianMoor\SweetDigitalAdmin\Controllers\DashboardController');
        $this->app->make('DebianMoor\SweetDigitalAdmin\Controllers\LoginController');
        $this->app->make('DebianMoor\SweetDigitalAdmin\Controllers\RegisterController');

        $this->loadViewsFrom(__DIR__.'/../views', 'sweetdigitaladmin');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->publishes([
            __DIR__.'/../front/lumino' => public_path('lumino'),
        ], 'lumino');

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'migrations');
    }
}
