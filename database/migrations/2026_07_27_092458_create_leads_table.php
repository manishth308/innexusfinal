<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->text('message')->nullable();
            $table->string('source')->default('contact_form');

            // Deliberately no separate is_read boolean - status = 'new' is
            // the single source of truth for unread/untouched.
            $table->string('status')->default('new');

            $table->timestamps();

            $table->index('status');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('leads');
    }
};
