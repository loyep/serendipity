<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class SerendipityServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->app['view']->addNamespace('admin', base_path('/resources/admin/views'));
        $this->app['view']->addNamespace('app', base_path('/resources/views'));

        $this->app->singleton('serendipity', \App\Serendipity\Serendipity::class);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
