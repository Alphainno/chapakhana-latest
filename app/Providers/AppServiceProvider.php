<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\ServiceCategory;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Share service categories with admin sidebar
        View::composer('admin.layouts.sidebar', function ($view) {
            $serviceCategories = ServiceCategory::where('is_active', true)
                ->withCount('products')
                ->orderBy('name')
                ->get();
            $view->with('serviceCategories', $serviceCategories);
        });
    }
}
