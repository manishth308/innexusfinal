<?php

namespace Tests\Feature;

use App\Enums\UserRole;
use App\Models\Lead;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class LeadResourceTest extends TestCase
{
    use RefreshDatabase;

    public function test_admin_can_view_leads_list(): void
    {
        $admin = User::factory()->create(['role' => UserRole::Admin]);
        Lead::create([
            'name' => 'Jane Test',
            'email' => 'jane@example.com',
            'company' => 'Acme',
            'project_type' => 'build',
            'budget_range' => '15k-50k',
            'message' => 'details',
            'source' => 'contact_form',
        ]);

        $this->actingAs($admin)->get('/admin/leads')->assertSuccessful();
    }

    public function test_admin_can_view_lead_edit_page(): void
    {
        $admin = User::factory()->create(['role' => UserRole::Admin]);
        $lead = Lead::create([
            'name' => 'Jane Test',
            'email' => 'jane@example.com',
            'source' => 'contact_form',
        ]);

        $this->actingAs($admin)->get("/admin/leads/{$lead->id}/edit")->assertSuccessful();
    }

    public function test_non_admin_cannot_view_leads(): void
    {
        $blogger = User::factory()->create(['role' => UserRole::Blogger]);

        $this->actingAs($blogger)->get('/admin/leads')->assertForbidden();
    }
}
