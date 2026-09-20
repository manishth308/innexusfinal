<?php

namespace App\Filament\Blogger\Widgets;

use App\Enums\BlogStatus;
use App\Models\Blog;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\Auth;

/**
 * Blogger-panel-only widget — deliberately lives outside app/Filament/Widgets
 * so it never gets picked up by AdminPanelProvider's discoverWidgets(). Only
 * ever counts the signed-in blogger's own posts (never a global count),
 * matching the own-posts-only scoping on BlogResource/BlogPolicy.
 */
class BlogStatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $ownPosts = Blog::where('user_id', Auth::id());

        return [
            Stat::make('My Posts', (clone $ownPosts)->count())
                ->icon('heroicon-o-rectangle-stack')
                ->color('gray'),

            Stat::make('Published', (clone $ownPosts)->where('status', BlogStatus::Published)->count())
                ->icon('heroicon-o-check-circle')
                ->color('success'),

            Stat::make('Drafts', (clone $ownPosts)->where('status', BlogStatus::Draft)->count())
                ->icon('heroicon-o-pencil-square')
                ->color('warning'),
        ];
    }
}
