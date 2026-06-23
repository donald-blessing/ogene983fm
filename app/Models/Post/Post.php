<?php

declare(strict_types=1);

namespace App\Models\Post;

use App\Models\Category\Category;
use App\Models\Description\Description;
use App\Models\Presenter\Presenter;
use App\Models\Tag\Tag;
use App\Traits\AboutTrait;
use App\Traits\Taggable;
use Database\Factories\Post\PostFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Laravelista\Comments\Comment;
use Laravelista\Comments\Commentable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * App\Models\Post\Post
 *
 * @property-read Presenter $author
 * @property-read Category $category
 * @property-read Description|null $description
 * @property-read mixed $about
 * @property-read mixed $cover_image
 * @property-read mixed $excerpt
 * @property-read mixed $summary
 * @property-read Collection|Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post\Post myPosts()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post\Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post\Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post\Post query()
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property int $user_id
 * @property int $category_id
 * @property int $programme_id
 * @property string $content
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post\Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post\Post whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post\Post whereProgrammeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post\Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post\Post whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post\Post whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Post\Post whereUserId($value)
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\Post\PostFactory factory($count = null, $state = [])
 * @property-read Collection<int, Comment> $approvedComments
 * @property-read int|null $approved_comments_count
 * @property-read Collection<int, Comment> $comments
 * @property-read int|null $comments_count
 * @property string $status
 * @property int $is_featured
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereIsFeatured($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Post whereStatus($value)
 * @property-read string $url
 * @mixin \Eloquent
 */
class Post extends Model implements HasMedia, Searchable
{
    use AboutTrait;
    use Commentable;
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;
    use Taggable;

    protected static function newFactory()
    {
        return PostFactory::new();
    }

    /**
     * @var string[]
     */
    protected $fillable = [
        'id',
        'user_id',
        'category_id',
        'title',
        'slug',
        'content',
        'status',
        'is_featured',
    ];

    /**

     * Register media collections.
     */
    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('cover_images')
            ->singleFile();
    }

    /**
     * Register media conversions.
     */
    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(368)
            ->height(232)
            ->sharpen(10)
            ->format('webp');

        $this->addMediaConversion('webp')
            ->format('webp')
            ->quality(80);
    }

    /**
     * Get cover image URL.
     */
    public function getCoverImageAttribute(): string
    {
        return $this->getFirstMediaUrl('cover_images') ?: asset('images/default-post.png');
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->slugsShouldBeNoLongerThan(50);
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('post.show', ['category' => $this->category->slug, 'post' => $this->slug]);

        return new SearchResult(
            $this,
            $this->title,
            $url
        );
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(Presenter::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    /**
     * @return mixed
     */
    public function scopeMyPosts($query)
    {
        return $query->whereHas('users', function ($query): void {
            $query->where('users.id', Auth::user()->id);
        });
    }

    public function getUrlAttribute(): string
    {
        return route('post.show', ['category' => $this->category->slug, 'post' => $this->slug]);
    }
}
