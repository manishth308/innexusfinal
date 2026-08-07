<?php

namespace App\Policies;

use App\Enums\UserRole;
use App\Models\Category;
use App\Models\User;

class CategoryPolicy
{
    public function viewAny(User $user): bool
    {
        return in_array($user->role, [UserRole::Admin, UserRole::Blogger], true);
    }

    public function view(User $user, Category $category): bool
    {
        return in_array($user->role, [UserRole::Admin, UserRole::Blogger], true);
    }

    public function create(User $user): bool
    {
        return in_array($user->role, [UserRole::Admin, UserRole::Blogger], true);
    }

    public function update(User $user, Category $category): bool
    {
        return in_array($user->role, [UserRole::Admin, UserRole::Blogger], true);
    }

    public function delete(User $user, Category $category): bool
    {
        return in_array($user->role, [UserRole::Admin, UserRole::Blogger], true);
    }

    public function deleteAny(User $user): bool
    {
        return in_array($user->role, [UserRole::Admin, UserRole::Blogger], true);
    }
}
