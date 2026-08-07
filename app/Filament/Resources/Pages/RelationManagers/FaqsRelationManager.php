<?php

namespace App\Filament\Resources\Pages\RelationManagers;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\CreateAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Resources\RelationManagers\RelationManager;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class FaqsRelationManager extends RelationManager
{
    protected static string $relationship = 'faqs';

    public function form(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('question')
                    ->required()
                    ->maxLength(255)
                    ->columnSpanFull(),

                Textarea::make('answer')
                    ->required()
                    ->columnSpanFull(),

                Toggle::make('is_active')
                    ->default(true),

                // sort_order is intentionally not a form field - it's
                // controlled entirely by the drag handle in the table below.
            ]);
    }

    public function table(Table $table): Table
    {
        return $table
            ->recordTitleAttribute('question')
            // Each FAQ belongs to exactly one page - no Associate/Dissociate
            // here, since page_id is a required, cascade-deleting FK, not a
            // nullable/shared link. Create + Edit + Delete only.
            ->reorderable('sort_order')
            ->defaultSort('sort_order')
            ->columns([
                TextColumn::make('question')
                    ->searchable()
                    ->limit(60),
                IconColumn::make('is_active')
                    ->boolean(),
                TextColumn::make('sort_order')
                    ->label('Order')
                    ->numeric(),
            ])
            ->filters([
                //
            ])
            ->headerActions([
                CreateAction::make(),
            ])
            ->recordActions([
                EditAction::make(),
                DeleteAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
