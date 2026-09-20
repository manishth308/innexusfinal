<?php

namespace App\Policies;

use App\Enums\UserRole;
use App\Models\Blog;
use App\Models\User;

class BlogPolicy
{
    public function viewAny(User $user): bool
    {
        return in_array($user->role, [UserRole::Admin, UserRole::Blogger], true);
    }

    public function view(User $user, Blog $blog): bool
    {
        return $user->role === UserRole::Admin
            || ($user->role === UserRole::Blogger && $user->id === $blog->user_id);
    }

    public function create(User $user): bool
    {
        return in_array($user->role, [UserRole::Admin, UserRole::Blogger], true);
    }

    public function update(User $user, Blog $blog): bool
    {
        return $user->role === UserRole::Admin
            || ($user->role === UserRole::Blogger && $user->id === $blog->user_id);
    }

    public function delete(User $user, Blog $blog): bool
    {
        return $user->role === UserRole::Admin
            || ($user->role === UserRole::Blogger && $user->id === $blog->user_id);
    }

    // Bulk delete: only Admin gets the toolbar bulk-delete action at all.
    // Bloggers still delete individually via delete() above, scoped to
    // their own posts by BlogResource::getEloquentQuery().
    public function deleteAny(User $user): bool
    {
        return $user->role === UserRole::Admin;
    }
}
