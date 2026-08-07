<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pages', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();

            // Validated at controller level (File::exists check) before
            // ever being resolved into view() - see PageController::show().
            $table->string('blade_file');

            $table->string('og_image')->nullable();
            $table->boolean('is_indexable')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pages');
    }
};
