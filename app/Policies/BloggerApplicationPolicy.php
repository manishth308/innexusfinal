<?php

namespace App\Policies;

use App\Enums\UserRole;
use App\Models\BloggerApplication;
use App\Models\User;

class BloggerApplicationPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->role === UserRole::Admin;
    }

    public function view(User $user, BloggerApplication $application): bool
    {
        return $user->role === UserRole::Admin;
    }

    public function create(User $user): bool
    {
        // Applications are only ever created by the public /blogs/apply
        // form (a guest, not an authenticated admin) - never from within
        // the admin panel itself.
        return false;
    }

    public function update(User $user, BloggerApplication $application): bool
    {
        return $user->role === UserRole::Admin;
    }

    public function delete(User $user, BloggerApplication $application): bool
    {
        return $user->role === UserRole::Admin;
    }

    public function deleteAny(User $user): bool
    {
        return $user->role === UserRole::Admin;
    }
}
