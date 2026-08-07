<?php

namespace App\Policies;

use App\Enums\UserRole;
use App\Models\Faq;
use App\Models\User;

class FaqPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->role === UserRole::Admin;
    }

    public function view(User $user, Faq $faq): bool
    {
        return $user->role === UserRole::Admin;
    }

    public function create(User $user): bool
    {
        return $user->role === UserRole::Admin;
    }

    public function update(User $user, Faq $faq): bool
    {
        return $user->role === UserRole::Admin;
    }

    public function delete(User $user, Faq $faq): bool
    {
        return $user->role === UserRole::Admin;
    }

    public function deleteAny(User $user): bool
    {
        return $user->role === UserRole::Admin;
    }
}
