<?php

namespace App\Filament\Resources\Leads\Pages;

use App\Filament\Resources\Leads\LeadResource;
use Filament\Resources\Pages\ListRecords;

class ListLeads extends ListRecords
{
    protected static string $resource = LeadResource::class;

    protected function getHeaderActions(): array
    {
        // Intentionally no CreateAction - leads only ever arrive through
        // the public /contact form, never created by hand in the admin.
        return [];
    }
}
