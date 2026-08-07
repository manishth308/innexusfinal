<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        View::composer('layouts.app', function ($view) {
            $view->with(
                'menuItems',
                Menu::root()->active()
                    ->with('page', 'children.page', 'children.children.page')
                    ->orderBy('sort_order')
                    ->get()
            );
        });
    }
}
