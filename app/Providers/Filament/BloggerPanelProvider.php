<?php

namespace App\Providers\Filament;

use App\Filament\Blogger\Pages\Dashboard;
use App\Filament\Blogger\Widgets\BlogStatsOverview;
use App\Filament\Blogger\Widgets\LatestBlogPosts;
use App\Filament\Resources\Blogs\BlogResource;
use App\Filament\Resources\Categories\CategoryResource;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets\AccountWidget;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\PreventRequestForgery;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class BloggerPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->id('blogs')
            ->path('blogs')
            ->login()
            ->passwordReset()
            ->profile(isSimple: false)
            ->brandName('IntechNexus — Blogger')
            // TODO: swap in real logo once available:
            // ->brandLogo(asset('images/logos/intechnexus-logo.svg'))
            ->colors([
                'primary' => Color::hex('#01183D'), // Prussian Blue
                'danger' => Color::hex('#F12B2B'),  // Cherry Red — blogger accent
            ])
            ->font('Inter')
            ->renderHook(
                \Filament\View\PanelsRenderHook::HEAD_END,
                fn () => new \Illuminate\Support\HtmlString(
                    '<link rel="stylesheet" href="https://fonts.bunny.net/css?family=sora:600,700,800" />
                    <style>
                        .fi-header-heading, h1, h2, h3 {
                            font-family: "Sora", sans-serif;
                        }
                    </style>'
                ),
            )
            // The single public "Write for Us" link on the marketing site
            // now points straight at this login page (see
            // pages/blog/index.blade.php and category.blade.php) rather
            // than the application form directly - a brand-new applicant
            // needs a way back to that form from here, since they have no
            // account yet to log into.
            ->renderHook(
                \Filament\View\PanelsRenderHook::AUTH_LOGIN_FORM_AFTER,
                fn () => \Illuminate\Support\Facades\Blade::render(
                    '<div class="mt-4 text-center text-sm">
                        <x-filament::link href="'.route('blogs.apply').'">
                            Don\'t have an account? Apply here
                        </x-filament::link>
                    </div>'
                ),
            )
            // Deliberately NOT discoverResources() here — this panel is
            // scoped to exactly these two resources, listed explicitly so
            // nothing new dropped into Filament/Resources leaks in later.
            ->resources([
                BlogResource::class,
                CategoryResource::class,
            ])
            ->pages([
                Dashboard::class,
            ])
            ->widgets([
                AccountWidget::class,
                BlogStatsOverview::class,
                LatestBlogPosts::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                PreventRequestForgery::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
