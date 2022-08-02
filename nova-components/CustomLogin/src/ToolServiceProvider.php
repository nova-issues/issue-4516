<?php

namespace Acme\CustomLogin;

use Illuminate\Support\ServiceProvider;
use Laravel\Nova\Http\Controllers\LoginController as NovaLoginController;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(NovaLoginController::class, Http\Controllers\LoginController::class);
    }
}
