<?php

namespace Atin\LaravelBreadcrumbs;

use Illuminate\Support\ServiceProvider;
use Atin\LaravelBreadcrumbs\View\Components\Breadcrumbs;

class BreadcrumbsProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-breadcrumbs');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/laravel-breadcrumbs')
        ], 'laravel-breadcrumbs-views');
    }
}