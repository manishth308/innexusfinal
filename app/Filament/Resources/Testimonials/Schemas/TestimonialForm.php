<?php

namespace App\Filament\Resources\Testimonials\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class TestimonialForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Textarea::make('quote')
                    ->required()
                    ->maxLength(1000)
                    ->columnSpanFull(),

                TextInput::make('client_name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('client_title')
                    ->maxLength(255)
                    ->helperText('e.g. job title / company - optional.'),

                TextInput::make('rating')
                    ->required()
                    ->numeric()
                    ->minValue(1)
                    ->maxValue(5)
                    ->default(5),

                FileUpload::make('client_photo')
                    ->image()
                    ->directory('testimonials')
                    ->maxSize(2048), // 2MB

                Toggle::make('is_active')
                    ->default(true),

                // sort_order intentionally not a form field - controlled by
                // the drag handle on the table, matching Faq/Menu pattern.
            ]);
    }
}
