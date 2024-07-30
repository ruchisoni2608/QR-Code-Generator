<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\ConfigOption;
use Illuminate\Support\Facades;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // ...
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if (Schema::hasTable('config_options')) {
            $settings = ConfigOption::query()->whereIn('key', ['logo', 'contact1', 'contact2', 'email', 'address'])->where('status', 1)->get()->pluck('value', 'key');

            Facades\View::composer('layouts.client', function (View $view) use ($settings) {
                $mainCategory = Category::query()->select('id', 'name', 'slug', 'parent_id')->where('status', 1)->get()->toArray();
                $view->with(['settings' => $settings, 'mainCategory' => $mainCategory]);
            });

            Facades\View::composer('client.contact', function (View $view) use ($settings) {
                $view->with(['settings' => $settings]);
            });
        }
    }
}
