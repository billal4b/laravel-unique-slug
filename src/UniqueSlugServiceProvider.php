<?php

namespace Billal\UniqueSlug;

use Illuminate\Support\ServiceProvider;

class UniqueSlugServiceProvider extends ServiceProvider {

    /**
     * Register any application services.
     */
    public function register(): void
    {
       $this->app->bind('laravel-unique-slug', function($app){
            return new \Billal\UniqueSlug\UniqueSlug();
       });

       $this->mergeConfigFrom(
        __DIR__.'/../config/slug.php', 'slug'
        );
    }

    /**
     * Bootstrap any package services.
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/slug.php' => config_path('slug.php'),
        ]);
    }
}
