<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\AdminPanelContent;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */

     public function boot()
     {
         Schema::defaultStringLength(191);
         View::composer('home', function ($view) {
            $adminPanelContent = AdminPanelContent::first();
            $view->with('homepage_telephone_number', $adminPanelContent->telephone_number ?? 'XXX-XXX-XXXX');
        });
        View::composer('app', function ($view) {
            $adminPanelContent = AdminPanelContent::first();
            $view->with('homepage_telephone_number', $adminPanelContent->telephone_number ?? 'XXX-XXX-XXXX');
        });
     }
}
