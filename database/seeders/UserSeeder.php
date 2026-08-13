<?php

namespace Database\Seeders;

use App\Enums\UserRole;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Seed one login per panel role. firstOrCreate keyed on email so this
     * is safe to re-run (e.g. after migrate:fresh --seed) without creating
     * duplicates or resetting an already-changed password.
     *
     * IMPORTANT: these are throwaway local-dev credentials. Change both
     * passwords (or delete these rows entirely) before this ever touches
     * a staging or production database.
     */
    public function run(): void
    {
        User::query()->firstOrCreate(
            ['email' => 'admin@intechnexus.test'],
            [
                'name' => 'Admin User',
                // 'password' casts to 'hashed' on the model - this is
                // auto-hashed on save, not stored as plain text.
                'password' => 'password',
                'role' => UserRole::Admin,
                'email_verified_at' => now(),
            ]
        );

        User::query()->firstOrCreate(
            ['email' => 'blogger@intechnexus.test'],
            [
                'name' => 'Blogger User',
                'password' => 'password',
                'role' => UserRole::Blogger,
                'email_verified_at' => now(),
            ]
        );
    }
}