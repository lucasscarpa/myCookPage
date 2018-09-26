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

        $this->app->bind(
            'App\Models\Receita\Interfaces\RepositoryEloquent',
            'App\Models\Receita\RepositoryEloquent'
        );

        $this->app->bind(
            'App\Models\Categoria\Interfaces\RepositoryEloquent',
            'App\Models\Categoria\RepositoryEloquent'
        );
    }
}