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
            __DIR__.'/config/lara-izitoast.php' => config_path('lara-izitoast.php'),
            __DIR__.'/../assests/iziToast.css' => public_path('css/iziToast.css'),
            __DIR__.'/../assests/iziToast.js' => public_path('js/iziToast.js'),
            __DIR__.'/../views' => base_path('resources/views/vendor/lara-izitoast')
        ]);

    }

    public function register()
    {
        $this->registerHelper();

        $this->mergeConfigFrom(
            __DIR__.'/config/lara-izitoast.php', 'lara-izitoast'
        );

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