<?php

declare(strict_types=1);

namespace App\Models\Metro;

use App\Models\Category\Category;
use App\Models\Description\Description;
use App\Models\Tag\Tag;
use App\Models\User;
use App\Traits\AboutTrait;
use App\Traits\Taggable;
use Database\Factories\Metro\MetroFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Laravelista\Comments\Commentable;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * App\Models\Metro\Metro
 *
 * @property-read Category $category
 * @property-read Description|null $description
 * @property-read mixed $about
 * @property-read mixed $cover_image
 * @property-read mixed $excerpt
 * @property-read mixed $summary
 * @property-read Collection|Tag[] $tags
 * @property-read int|null $tags_count
 * @property-read User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Metro\Metro newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Metro\Metro newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Metro\Metro query()
 * @property int $id
 * @property int $user_id
 * @property int $category_id
 * @property string $title
 * @property string $slug
 * @property string $content
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Metro\Metro whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Metro\Metro whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Metro\Metro whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Metro\Metro whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Metro\Metro whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Metro\Metro whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Metro\Metro whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Metro\Metro whereUserId($value)
 * @property string $author
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\Metro\MetroFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Metro whereAuthor($value)
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravelista\Comments\Comment> $approvedComments
 * @property-read int|null $approved_comments_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravelista\Comments\Comment> $comments
 * @property-read int|null $comments_count
 * @mixin \Eloquent
 */
class Metro extends Model implements HasMedia, Searchable
{
    use AboutTrait;
    use Commentable;
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;
    use Taggable;

    protected static function newFactory()
    {
        return MetroFactory::new();
    }

    protected $fillable = [
        'id',
        'user_id',
        'category_id',
        'title',
        'slug',
        'content',
        'author',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->slugsShouldBeNoLongerThan(255);
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('metro.show', $this->slug);

        return new SearchResult(
            $this,
            $this->id,
            $url
        );
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('cover_images')
            ->singleFile();
    }

    public function getCoverImageAttribute()
    {
        return $this->getFirstMediaUrl('cover_images');
    }
}
