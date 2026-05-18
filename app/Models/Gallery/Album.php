<?php

namespace App\Models\Gallery;

use App\Models\Category\Category;
use App\Models\Description\Description;
use App\Models\Tag\Tag;
use App\Traits\AboutTrait;
use App\Traits\Taggable;
use Database\Factories\Gallery\AlbumFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Laravelista\Comments\Comment;
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
 * App\Models\Gallery\Album
 *
 * @property-read Collection|AlbumUpload[] $albumUploads
 * @property-read int|null $album_uploads_count
 * @property-read Collection|Comment[] $approvedComments
 * @property-read int|null $approved_comments_count
 * @property-read Category $category
 * @property-read Collection|Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read Description|null $description
 * @property-read mixed $about
 * @property-read mixed $cover_image
 * @property-read mixed $excerpt
 * @property-read mixed $summary
 * @property-read Image|null $image
 * @property-read Collection|Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gallery\Album newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gallery\Album newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gallery\Album query()
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property int $category_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gallery\Album whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gallery\Album whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gallery\Album whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gallery\Album whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gallery\Album whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Gallery\Album whereUpdatedAt($value)
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\Gallery\AlbumFactory factory($count = null, $state = [])
 * @mixin \Eloquent
 */
class Album extends Model implements HasMedia, Searchable
{
    use AboutTrait;
    use Commentable;
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;
    use Taggable;

    protected static function newFactory()
    {
        return AlbumFactory::new();
    }

    protected $fillable = [
        'id',
        'title',
        'slug',
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
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    public function getSearchResult(): SearchResult
    {
        $url = route('gallery.album.show', $this->slug);

        return new SearchResult(
            $this,
            $this->id,
            $url
        );
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function albumUploads()
    {
        return $this->hasMany(AlbumUpload::class, 'album_id');
    }

    public function url(): string
    {
        return route('gallery.album.show', $this->slug);
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
