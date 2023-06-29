<?php

namespace DFM\ECommerce;

use DFM\ECommerce\App\Http\Controllers\EcommerceController;
use Illuminate\Support\ServiceProvider;

class ECommerceServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->make(EcommerceController::class);
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/resources/views', 'ecommerce');

    }
}
