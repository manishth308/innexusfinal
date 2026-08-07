<?php

namespace App\Models;

use App\Enums\UserRole;
use Database\Factories\UserFactory;
use Filament\Models\Contracts\FilamentUser;
use Filament\Models\Contracts\HasAvatar;
use Filament\Panel;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

#[Fillable(['name', 'email', 'password', 'role', 'bio', 'job_title', 'avatar', 'social_url'])]
#[Hidden(['password', 'remember_token'])]
class User extends Authenticatable implements FilamentUser, HasAvatar
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
            'role' => UserRole::class,
        ];
    }

    /**
     * Critical: panel access must be scoped per-role, per-panel. This was a
     * real bug in the previous version of this project — do not loosen this
     * to a blanket `true` for any authenticated user.
     */
    public function canAccessPanel(Panel $panel): bool
    {
        return match ($panel->getId()) {
            'admin' => $this->role === UserRole::Admin,
            'blogger' => $this->role === UserRole::Blogger,
            default => false,
        };
    }

    public function getFilamentAvatarUrl(): ?string
    {
        return $this->avatar ? asset('storage/'.$this->avatar) : null;
    }

    public function blogs(): HasMany
    {
        return $this->hasMany(Blog::class);
    }
}
