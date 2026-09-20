<?php

namespace App\Filament\Blogger\Pages;

use App\Filament\Resources\Blogs\BlogResource;
use Filament\Actions\Action;
use Filament\Facades\Filament;
use Filament\Pages\Dashboard as BaseDashboard;

/**
 * Replaces Filament's stock Dashboard on the `blogs` panel only (see
 * BloggerPanelProvider::pages()) - the admin panel keeps the plain stock
 * Dashboard::class untouched, so the two panels' dashboards are distinct
 * on purpose. The actual dashboard content (stats + recent posts) comes
 * from the BlogStatsOverview/LatestBlogPosts widgets registered on the
 * panel, not from this page directly - this class only adds the two
 * header actions.
 */
class Dashboard extends BaseDashboard
{
    protected function getHeaderActions(): array
    {
        return [
            Action::make('createPost')
                ->label('Create New Post')
                ->icon('heroicon-o-plus')
                ->url(fn () => BlogResource::getUrl('create')),

            // Filament::getProfileUrl() is the framework's own helper for
            // wherever ->profile() sends the user avatar menu's "Profile"
            // link - reuses that same destination rather than duplicating
            // routing logic here. If this doesn't resolve on your
            // installed Filament version, swap it for that page's own
            // ::getUrl() once you've confirmed its class/route name.
            Action::make('myProfile')
                ->label('My Profile')
                ->icon('heroicon-o-user-circle')
                ->color('gray')
                ->url(fn () => Filament::getProfileUrl()),
        ];
    }
}
