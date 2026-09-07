<?php

namespace App\Filament\Resources\Leads\Schemas;

use App\Enums\LeadStatus;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class LeadForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->disabled(),

                TextInput::make('company')
                    ->disabled(),

                TextInput::make('email')
                    ->disabled(),

                TextInput::make('project_type')
                    ->disabled(),

                TextInput::make('budget_range')
                    ->disabled(),

                Textarea::make('message')
                    ->label('Project details')
                    ->disabled()
                    ->columnSpanFull(),

                TextInput::make('source')
                    ->disabled(),

                // The only field an admin actually edits here - everything
                // else above is what the visitor submitted.
                Select::make('status')
                    ->options(LeadStatus::class)
                    ->required(),
            ]);
    }
}
