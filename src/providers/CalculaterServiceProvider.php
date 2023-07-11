<?php

namespace Yasiru\Calculator\Providers;

use Illuminate\Support\ServiceProvider;

class CalculaterServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make('Yasiru\Calculator\Controllers\CalculatorController');
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'calculator');
    }
}
