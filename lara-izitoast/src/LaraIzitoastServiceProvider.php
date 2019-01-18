<?php
/**
 * Created by PhpStorm.
 * User: marvincollins
 * Date: 1/17/19
 * Time: 9:31 PM
 */

namespace LaraIzitoast;

use Illuminate\Support\ServiceProvider;

class LaraIzitoastServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../views', 'lara-izitoast');

        $this->publishes([
            __DIR__.'/../views' => base_path('resources/views/vendor/lara-izitoast')
        ]);

    }

    public function register()
    {
        $this->registerHelper();

        $this->app->singleton('toast', function () {
            return new Toaster();
        });
    }

    public function registerHelper()
    {
        $file = __DIR__.'/helpers.php';

        if (file_exists($file)){
            require_once($file);
        }
    }
}