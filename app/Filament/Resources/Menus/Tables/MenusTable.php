<?php

namespace App\Filament\Resources\Menus\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;

class MenusTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->reorderable('sort_order')
            ->defaultSort('sort_order')
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('parent.title')
                    ->label('Parent')
                    ->placeholder('— root level —')
                    ->searchable(),
                TextColumn::make('page.title')
                    ->label('Links to')
                    ->placeholder('— dropdown only —')
                    ->searchable(),
                IconColumn::make('is_active')
                    ->boolean(),
                TextColumn::make('sort_order')
                    ->label('Order')
                    ->numeric(),
            ])
            ->filters([
                SelectFilter::make('parent_id')
                    ->label('Parent')
                    ->relationship('parent', 'title'),
                TernaryFilter::make('is_active'),
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
