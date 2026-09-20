<?php

namespace App\Filament\Blogger\Widgets;

use App\Models\Blog;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;

/**
 * Blogger-panel-only widget (see BlogStatsOverview) — shows only the
 * signed-in blogger's own 5 most recent posts, linking straight to their
 * edit page.
 *
 * NOTE: written against Filament v4's fluent table(Table $table): Table
 * widget API to match the rest of this codebase (see BlogsTable). If your
 * installed filament/widgets version expects the older
 * getTableQuery()/getTableColumns() widget API instead, port this the same
 * way — the column/query logic itself doesn't change.
 */
class LatestBlogPosts extends BaseWidget
{
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Blog::query()
                    ->where('user_id', Auth::id())
                    ->latest('created_at')
                    ->limit(5)
            )
            ->columns([
                TextColumn::make('title')
                    ->searchable(false)
                    ->url(fn (Blog $record): string => route('filament.blogs.resources.blogs.edit', $record)),

                TextColumn::make('status')
                    ->badge(),

                TextColumn::make('category.name')
                    ->label('Category')
                    ->placeholder('—'),

                TextColumn::make('published_at')
                    ->dateTime()
                    ->placeholder('Not published'),
            ])
            ->paginated(false);
    }
}
