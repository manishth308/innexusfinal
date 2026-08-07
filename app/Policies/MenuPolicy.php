<?php

namespace App\Policies;

use App\Enums\UserRole;
use App\Models\Menu;
use App\Models\User;

class MenuPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->role === UserRole::Admin;
    }

    public function view(User $user, Menu $menu): bool
    {
        return $user->role === UserRole::Admin;
    }

    public function create(User $user): bool
    {
        return $user->role === UserRole::Admin;
    }

    public function update(User $user, Menu $menu): bool
    {
        return $user->role === UserRole::Admin;
    }

    public function delete(User $user, Menu $menu): bool
    {
        return $user->role === UserRole::Admin;
    }

    public function deleteAny(User $user): bool
    {
        return $user->role === UserRole::Admin;
    }
}
