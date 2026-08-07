<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Validation\ValidationException;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Menu extends Model
{
    use HasSlug;

    public const MAX_DEPTH = 3;

    protected $fillable = [
        'title',
        'slug',
        'parent_id',
        'page_id',
        'sort_order',
        'is_active',
    ];

    protected function casts(): array
    {
        return [
            'is_active' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    protected static function booted(): void
    {
        static::saving(function (Menu $menu) {
            if ($menu->parent_id) {
                $menu->guardAgainstExceedingMaxDepth();
            }
        });
    }

    /**
     * Walk up the ancestor chain and reject the save (as a Filament-form
     * validation error) if this record would sit at a 4th level or deeper.
     */
    protected function guardAgainstExceedingMaxDepth(): void
    {
        $depth = 1; // this node itself
        $parentId = $this->parent_id;
        $visited = [];

        while ($parentId) {
            if (in_array($parentId, $visited, true)) {
                // Defensive: a cycle should never exist, but never loop forever.
                break;
            }
            $visited[] = $parentId;

            $depth++;

            if ($depth > self::MAX_DEPTH) {
                throw ValidationException::withMessages([
                    'parent_id' => 'This menu item would exceed the maximum nesting depth of '.self::MAX_DEPTH.' levels.',
                ]);
            }

            $parentId = static::where('id', $parentId)->value('parent_id');
        }
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    public function children(): HasMany
    {
        return $this->hasMany(Menu::class, 'parent_id')->orderBy('sort_order');
    }

    public function page(): BelongsTo
    {
        return $this->belongsTo(Page::class);
    }

    /**
     * Full breadcrumb path for this item, e.g. "Services > Web Dev > SEO".
     * Used to make the parent-picker dropdown legible once the tree has
     * any real depth - a bare title list is ambiguous when the same name
     * could exist under different parents.
     */
    public function getBreadcrumbPathAttribute(): string
    {
        $path = [$this->title];
        $parent = $this->parent;

        while ($parent) {
            array_unshift($path, $parent->title);
            $parent = $parent->parent;
        }

        return implode(' > ', $path);
    }

    public function scopeRoot(Builder $query): Builder
    {
        return $query->whereNull('parent_id');
    }

    public function scopeActive(Builder $query): Builder
    {
        return $query->where('is_active', true);
    }

    /**
     * A level-1 item with children is a dropdown/mega-menu trigger only -
     * it never renders as a clickable link, even if a page_id is present.
     * This is intentional per spec, not an oversight.
     */
    public function isClickable(): bool
    {
        return $this->page_id !== null && $this->children()->doesntExist();
    }
}
