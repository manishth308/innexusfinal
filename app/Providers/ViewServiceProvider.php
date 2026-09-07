<?php

namespace App\Providers;

use App\Models\Menu;
use Illuminate\Support\Facades\Log;
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
        // This composer runs on every page (all of them extend
        // layouts.app), so an unguarded query here means a single DB
        // hiccup takes down the entire site, not just one page. Degrade
        // to an empty nav instead of a hard 500.
        View::composer('layouts.app', function ($view) {
            try {
                $menuItems = Menu::root()->active()
                    ->with('page', 'children.page', 'children.children.page')
                    ->orderBy('sort_order')
                    ->get();
            } catch (\Throwable $e) {
                Log::error('Failed to load nav menu; rendering page with an empty nav.', [
                    'error' => $e->getMessage(),
                ]);
                $menuItems = collect();
            }

            $view->with('menuItems', $menuItems);
        });
    }
}
