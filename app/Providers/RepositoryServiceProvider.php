<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->bind(
            'App\Models\Usuario\Interfaces\RepositoryEloquent',
            'App\Models\Usuario\RepositoryEloquent'
        );
    }
}