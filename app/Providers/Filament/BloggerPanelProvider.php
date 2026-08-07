<?php

namespace App\Providers\Filament;

use App\Filament\Resources\Blogs\BlogResource;
use App\Filament\Resources\Categories\CategoryResource;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages\Dashboard;
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
            ->id('blogger')
            ->path('blogger')
            ->login()
            ->profile(isSimple: false)
            ->brandName('IntechNexus — Blogger')
            // TODO: swap in real logo once available:
            // ->brandLogo(asset('images/logos/intechnexus-logo.svg'))
            ->colors([
                'primary' => Color::hex('#01183D'), // Prussian Blue
                'danger' => Color::hex('#F12B2B'),  // Cherry Red — blogger accent
            ])
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
