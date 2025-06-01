<?php

namespace Roots\AcornPostTypes;

use Illuminate\Support\ServiceProvider;

class AcornPostTypesServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('Roots\AcornPostTypes', fn () => AcornPostTypes::make($this->app));

        $this->mergeConfigFrom(
            __DIR__.'/../config/post-types.php',
            'post-types'
        );
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/post-types.php' => $this->app->configPath('post-types.php'),
        ], 'config');

        /**
         * Register post types and taxonomies on WordPress init.
         */
        add_action('init', function (): void {
            $this->app->make('Roots\AcornPostTypes');
        }, 100);
    }
}
