<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        // Deliberately a separate table from `users` (not a "pending" status
        // on a real User row) - an application is a request, not yet an
        // account. This keeps "every User row is a legitimate account" true
        // everywhere else in the codebase, and means this whole feature can
        // be dropped later by removing this table + its resource/routes
        // without touching the users table at all.
        Schema::create('blogger_applications', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->index();
            $table->string('profession');
            $table->string('status')->default('pending');
            // Start of the 2-day reapplication cooldown after a rejection.
            $table->timestamp('rejected_at')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('blogger_applications');
    }
};
