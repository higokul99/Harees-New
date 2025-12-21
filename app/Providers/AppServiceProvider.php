<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        Schema::defaultStringLength(191);

        View::composer('partials.header', function ($view) {
            if (Auth::check()) {
                $cartCount = DB::table('cart')->where('user_id', Auth::id())->count();
                $wishlistCount = DB::table('user_wishlist')->where('user_id', Auth::id())->count();
                $view->with('cartCount', $cartCount);
                $view->with('wishlistCount', $wishlistCount);
            }
        });
    }
}
