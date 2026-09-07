<?php

namespace App\Filament\Resources\BloggerApplications\Pages;

use App\Filament\Resources\BloggerApplications\BloggerApplicationResource;
use Filament\Resources\Pages\ListRecords;

class ListBloggerApplications extends ListRecords
{
    protected static string $resource = BloggerApplicationResource::class;

    protected function getHeaderActions(): array
    {
        // Intentionally no CreateAction - applications only ever arrive
        // through the public /blogs/apply form.
        return [];
    }
}
