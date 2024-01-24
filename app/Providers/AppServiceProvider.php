<?php

namespace App\Providers;

use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\SegmentController;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(OrganizationController::class, function ($app) {
            return new OrganizationController();
        });
        $this->app->singleton(SegmentController::class, function ($app) {
            return new SegmentController();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
