<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            // These match the actual fields collected by the /contact form
            // (resources/views/pages/company/contact.blade.php) - the
            // contact form was previously being validated against fields
            // ("message") that the form never sent, so nothing was ever
            // saved. This migration brings the leads table in line with
            // what the form actually collects.
            $table->string('company')->nullable()->after('name');
            $table->string('project_type')->nullable()->after('message');
            $table->string('budget_range')->nullable()->after('project_type');
        });
    }

    public function down(): void
    {
        Schema::table('leads', function (Blueprint $table) {
            $table->dropColumn(['company', 'project_type', 'budget_range']);
        });
    }
};
