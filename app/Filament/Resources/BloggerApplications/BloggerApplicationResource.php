<?php

namespace App\Filament\Resources\BloggerApplications;

use App\Enums\BloggerApplicationStatus;
use App\Filament\Resources\BloggerApplications\Pages\ListBloggerApplications;
use App\Filament\Resources\BloggerApplications\Tables\BloggerApplicationsTable;
use App\Models\BloggerApplication;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class BloggerApplicationResource extends Resource
{
    protected static ?string $model = BloggerApplication::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserPlus;

    protected static ?string $navigationLabel = 'Blogger Applications';

    protected static ?string $recordTitleAttribute = 'email';

    /**
     * Count of applications still awaiting a decision - not a total
     * count of all applications, which would just be noise once the
     * queue is caught up.
     */
    public static function getNavigationBadge(): ?string
    {
        $count = static::getModel()::where('status', BloggerApplicationStatus::Pending)->count();

        return $count > 0 ? (string) $count : null;
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'warning';
    }

    public static function table(Table $table): Table
    {
        return BloggerApplicationsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        // List only - approving/rejecting are table row actions, not a
        // create/edit form (see LeadResource for the same read-mostly
        // pattern, and the note in BloggerApplicationPolicy on why
        // create() is always false here).
        return [
            'index' => ListBloggerApplications::route('/'),
        ];
    }
}
