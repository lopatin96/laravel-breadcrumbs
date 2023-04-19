<?php

namespace Atin\LaravelBreadcrumbs;

use Illuminate\Support\ServiceProvider;

class BreadcrumbsProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/laravel-breadcrumbs')
        ], 'laravel-breadcrumbs-views');
    }
}