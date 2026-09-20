<?php

namespace App\Models;

use App\Enums\BlogStatus;
use App\Support\HtmlSanitizer;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Blog extends Model
{
    use HasSlug;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'body',
        'featured_image',
        'status',
        'published_at',
        'user_id',
        'category_id',
        'meta_title',
        'meta_description',
        'og_image',
    ];

    protected function casts(): array
    {
        return [
            'status' => BlogStatus::class,
            'published_at' => 'datetime',
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
        // Sanitize body HTML on every save - never trust RichEditor output
        // as safe-to-render just because the toolbar is limited. Runs
        // regardless of which panel/account wrote the record.
        static::saving(function (Blog $blog) {
            if ($blog->isDirty('body') && filled($blog->body)) {
                $blog->body = HtmlSanitizer::clean($blog->body);
            }

            // Auto-set published_at exactly once, on first publish.
            if ($blog->isDirty('status')
                && $blog->status === BlogStatus::Published
                && blank($blog->published_at)) {
                $blog->published_at = now();
            }
        });
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('status', BlogStatus::Published)
            ->whereNotNull('published_at')
            ->where('published_at', '<=', now());
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * Falls back to the title itself when no meta_title was set in the
     * admin/blogger panel - every post gets a real <title>, never blank.
     */
    public function seoTitle(): string
    {
        return $this->meta_title ?: $this->title;
    }

    /**
     * meta_description, then the excerpt, then a plain-text clip of the
     * body - always something usable for <meta name="description">/OG,
     * never blank and never raw HTML.
     */
    public function seoDescription(): string
    {
        if (filled($this->meta_description)) {
            return $this->meta_description;
        }

        $source = $this->excerpt ?: strip_tags($this->body);

        return Str::limit(trim(preg_replace('/\s+/', ' ', $source)), 160);
    }

    /**
     * og_image, then the featured_image, then null (caller supplies a
     * site-wide default) - never a broken path.
     */
    public function seoImageUrl(): ?string
    {
        $path = $this->og_image ?: $this->featured_image;

        return $path ? Storage::url($path) : null;
    }
}
