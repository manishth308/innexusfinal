<?php

namespace App\Filament\Resources\Users\Schemas;

use App\Enums\UserRole;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Illuminate\Support\Facades\Hash;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->required()
                    ->maxLength(255),

                TextInput::make('email')
                    ->label('Email address')
                    ->email()
                    ->required()
                    ->unique(ignoreRecord: true)
                    ->maxLength(255),

                DateTimePicker::make('email_verified_at'),

                // Required on create; on edit, leaving it blank keeps the
                // existing password unchanged rather than overwriting it
                // with a hash of an empty string.
                TextInput::make('password')
                    ->password()
                    ->revealable()
                    ->dehydrateStateUsing(fn ($state) => Hash::make($state))
                    ->dehydrated(fn ($state) => filled($state))
                    ->required(fn (string $operation): bool => $operation === 'create')
                    ->helperText(fn (string $operation) => $operation === 'edit'
                        ? 'Leave blank to keep the current password.'
                        : null),

                Select::make('role')
                    ->options(UserRole::class)
                    ->default(UserRole::Admin)
                    ->required(),

                Textarea::make('bio')
                    ->maxLength(1000)
                    ->columnSpanFull()
                    ->helperText('Public author byline - shown on blog posts for E-E-A-T.'),

                TextInput::make('job_title')
                    ->maxLength(255),

                FileUpload::make('avatar')
                    ->image()
                    ->disk('public')
                    ->imageEditor()
                    ->imageEditorAspectRatios([
                        '1:1',
                    ])
                    ->imageCropAspectRatio('1:1')
                    ->directory('avatars')
                    ->maxSize(2048), // 2MB

                TextInput::make('social_url')
                    ->label('Social / profile URL')
                    ->url()
                    ->maxLength(255),
            ]);
    }
}
