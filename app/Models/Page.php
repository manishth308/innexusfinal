<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Page extends Model
{
    use HasSlug;

    protected $fillable = [
        'title',
        'slug',
        'meta_title',
        'meta_description',
        'blade_file',
        'og_image',
        'is_indexable',
    ];

    protected function casts(): array
    {
        return [
            'is_indexable' => 'boolean',
        ];
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function faqs(): HasMany
    {
        return $this->hasMany(Faq::class);
    }

    public function activeFaqs(): HasMany
    {
        return $this->faqs()->where('is_active', true)->orderBy('sort_order');
    }
}
