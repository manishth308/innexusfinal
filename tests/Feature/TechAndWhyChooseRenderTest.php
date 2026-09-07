<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TechAndWhyChooseRenderTest extends TestCase
{
    use RefreshDatabase;

    public function test_all_pages_render_successfully(): void
    {
        $this->artisan('db:seed')->assertSuccessful();

        $slugs = \App\Models\Page::pluck('slug')->reject(fn ($s) => $s === 'home');

        $failures = [];
        foreach ($slugs as $slug) {
            $response = $this->get("/{$slug}");
            if ($response->getStatusCode() !== 200) {
                $failures[] = "{$slug} -> {$response->getStatusCode()}";
            }
        }

        $this->assertEmpty($failures, implode(', ', $failures));
    }

    public function test_custom_software_development_page_has_new_classes(): void
    {
        $this->artisan('db:seed')->assertSuccessful();

        $response = $this->get('/custom-software-development');
        $response->assertSuccessful();
        $response->assertSee('tech-card-icon-frame', false);
        $response->assertSee('why-choose-image-frame', false);
    }
}
