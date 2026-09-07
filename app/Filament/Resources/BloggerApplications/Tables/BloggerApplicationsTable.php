<?php

namespace App\Filament\Resources\BloggerApplications\Tables;

use App\Enums\BloggerApplicationStatus;
use App\Enums\UserRole;
use App\Mail\BloggerApplicationRejected;
use App\Models\BloggerApplication;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

class BloggerApplicationsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->defaultSort('created_at', 'desc')
            ->columns([
                TextColumn::make('first_name')
                    ->label('Name')
                    ->formatStateUsing(fn ($record) => $record->fullName())
                    ->searchable(['first_name', 'last_name']),
                TextColumn::make('email')
                    ->searchable()
                    ->copyable(),
                TextColumn::make('profession')
                    ->searchable(),
                TextColumn::make('status')
                    ->badge()
                    ->sortable(),
                TextColumn::make('created_at')
                    ->label('Applied')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->options(BloggerApplicationStatus::class),
            ])
            ->recordActions([
                Action::make('approve')
                    ->color('success')
                    ->icon('heroicon-o-check')
                    ->visible(fn (BloggerApplication $record) => $record->status === BloggerApplicationStatus::Pending)
                    ->requiresConfirmation()
                    ->modalDescription('This creates a blogger account and emails them a link to set their password.')
                    ->action(fn (BloggerApplication $record) => self::approve($record)),

                Action::make('reject')
                    ->color('danger')
                    ->icon('heroicon-o-x-mark')
                    ->visible(fn (BloggerApplication $record) => $record->status === BloggerApplicationStatus::Pending)
                    ->requiresConfirmation()
                    ->modalDescription('This sends the applicant a polite decline email. They can reapply after 2 days.')
                    ->action(fn (BloggerApplication $record) => self::reject($record)),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }

    private static function approve(BloggerApplication $record): void
    {
        // Guard against a double-click or two admins approving the same
        // application at once.
        if (User::where('email', $record->email)->exists()) {
            Notification::make()
                ->title('An account already exists for this email.')
                ->danger()
                ->send();

            return;
        }

        $user = User::create([
            'name' => $record->fullName(),
            'email' => $record->email,
            'role' => UserRole::Blogger,
            // Nobody ever sees or uses this - it's immediately unusable
            // and gets overwritten the moment the applicant sets their own
            // password via the emailed link.
            'password' => Hash::make(Str::random(40)),
        ]);

        $record->update(['status' => BloggerApplicationStatus::Approved]);

        // Laravel's own password broker: generates + stores the token and
        // fires the standard ResetPassword notification email. No custom
        // token/mail code needed for this part.
        Password::sendResetLink(['email' => $user->email]);

        Notification::make()
            ->title('Approved - invite email sent.')
            ->success()
            ->send();
    }

    private static function reject(BloggerApplication $record): void
    {
        $record->update([
            'status' => BloggerApplicationStatus::Rejected,
            'rejected_at' => now(),
        ]);

        Mail::to($record->email)->send(new BloggerApplicationRejected($record));

        Notification::make()
            ->title('Application rejected.')
            ->success()
            ->send();
    }
}
