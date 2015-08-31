<?php namespace Unamatasanatarai\LaraTrans;

use Illuminate\Support\ServiceProvider;

class LaraTransProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // remember to run `php artisan vendor:publish`
        $this->publishes([
            realpath(__DIR__ . '/migrations') => $this->app->databasePath() . '/migrations',
        ]);
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
