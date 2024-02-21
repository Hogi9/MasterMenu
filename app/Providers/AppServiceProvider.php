<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use App\Models\Menu;
use App\Models\SubMenu;

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
        // $excludedRoutes = [
        //     '/',
        //     'login',
        //     'logout',
        // ];

        // // Check if the current request matches any excluded routes
        // if (!request()->is($excludedRoutes)) {
        //     $menus = Menu::with('submenu')->get();
        //     view()->share('menus', $menus);
        // }
    }
}
