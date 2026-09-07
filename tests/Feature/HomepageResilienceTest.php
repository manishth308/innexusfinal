<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Schema;
use Tests\TestCase;

class HomepageResilienceTest extends TestCase
{
    use RefreshDatabase;

    public function test_homepage_loads_normally(): void
    {
        $this->get('/')->assertSuccessful();
    }

    public function test_homepage_still_loads_if_testimonials_table_is_unavailable(): void
    {
        Schema::drop('testimonials');

        $response = $this->get('/');

        $response->assertSuccessful();
        $response->assertDontSee('Whoops', false);
    }

    public function test_every_page_still_loads_with_an_empty_nav_if_menus_table_is_unavailable(): void
    {
        Schema::drop('menus');

        // Not just home - the nav composer runs on every page via
        // layouts.app, so this table failing is a sitewide risk.
        $this->get('/')->assertSuccessful();
        $this->get('/contact')->assertSuccessful();
    }
}
