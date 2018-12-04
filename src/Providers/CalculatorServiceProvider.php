<?php

namespace Ezgajups\Calculator\Providers;

use Ezgajups\Calculator\Controllers\CalculatorController;
use Ezgajups\Calculator\Exceptions\Handler;
use Illuminate\Contracts\Debug\ExceptionHandler;
use Illuminate\Support\ServiceProvider;

class CalculatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/../routes.php';
//        app()->singleton(
//            ExceptionHandler::class,
//            Handler::class
//        );
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make(CalculatorController::class);
        $this->loadViewsFrom(__DIR__.'/../views', 'calculator');
    }
}
