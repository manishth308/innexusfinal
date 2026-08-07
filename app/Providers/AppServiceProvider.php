<?php

namespace App\Providers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Lead;
use App\Models\Menu;
use App\Models\Page;
use App\Models\Testimonial;
use App\Models\User;
use App\Policies\BlogPolicy;
use App\Policies\CategoryPolicy;
use App\Policies\FaqPolicy;
use App\Policies\LeadPolicy;
use App\Policies\MenuPolicy;
use App\Policies\PagePolicy;
use App\Policies\TestimonialPolicy;
use App\Policies\UserPolicy;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Explicit map, not relying on Laravel's {Model}Policy naming-convention
     * auto-discovery. Every Filament resource in this project must have a
     * real policy here - Filament's "no policy = allow" default is never
     * acceptable for any of these eight resources.
     */
    protected array $modelPolicies = [
        User::class => UserPolicy::class,
        Page::class => PagePolicy::class,
        Faq::class => FaqPolicy::class,
        Menu::class => MenuPolicy::class,
        Blog::class => BlogPolicy::class,
        Category::class => CategoryPolicy::class,
        Testimonial::class => TestimonialPolicy::class,
        Lead::class => LeadPolicy::class,
    ];

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        foreach ($this->modelPolicies as $model => $policy) {
            Gate::policy($model, $policy);
        }
    }
}
