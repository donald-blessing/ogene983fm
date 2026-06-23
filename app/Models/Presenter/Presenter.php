<?php

declare(strict_types=1);

namespace App\Models\Presenter;

use App\Models\Description\Description;
use App\Models\Programme\Programme;
use App\Models\Tag\Tag;
use App\Traits\AboutTrait;
use App\Traits\Taggable;
use Database\Factories\Presenter\PresenterFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * App\Models\Presenter\Presenter
 *
 * @property-read Description|null $description
 * @property-read mixed $about
 * @property-read mixed $content
 * @property-read mixed $avatar
 * @property-read mixed $excerpt
 * @property-read mixed $summary
 * @property-read Collection|Programme[] $programmes
 * @property-read int|null $programmes_count
 * @property-read Collection|Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Presenter\Presenter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Presenter\Presenter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Presenter\Presenter query()
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Presenter\Presenter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Presenter\Presenter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Presenter\Presenter whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Presenter\Presenter whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Presenter\Presenter whereUpdatedAt($value)
 * @property-read mixed $cover_image
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\Presenter\PresenterFactory factory($count = null, $state = [])
 * @property string|null $twitter_handle
 * @property string|null $instagram_handle
 * @property string|null $facebook_url
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Presenter whereFacebookUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Presenter whereInstagramHandle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Presenter whereTwitterHandle($value)
 * @property-read string $url
 * @mixin \Eloquent
 */
class Presenter extends Model implements HasMedia, Searchable
{
    use AboutTrait;
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;
    use Taggable;

    protected static function newFactory()
    {
        return PresenterFactory::new();
    }

    protected $fillable = [
        'name',
        'twitter_handle',
        'instagram_handle',
        'facebook_url',
    ];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
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

    /**
     * Get search result
     */
    public function getSearchResult(): SearchResult
    {
        $url = route('presenter.show', $this->slug);

        return new SearchResult(
            $this,
            $this->id,
            $url
        );
    }

    /**
     * Get programmes
     */
    public function programmes(): BelongsToMany
    {
        return $this->belongsToMany(Programme::class);
    }

    public function getContentAttribute()
    {
        return $this->about;
    }

    public function getUrlAttribute(): string
    {
        return route('presenter.show', ['presenter' => $this->slug]);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('avatars')
            ->singleFile();
    }

    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('thumb')
            ->width(400)
            ->height(400)
            ->format('webp');

        $this->addMediaConversion('webp')
            ->format('webp')
            ->quality(80);
    }

    public function getAvatarAttribute()
    {
        return $this->getFirstMediaUrl('avatars');
    }

    // Keep getCoverImageAttribute if needed for compatibility, but instructions said getAvatarAttribute
    public function getCoverImageAttribute()
    {
        return $this->getAvatarAttribute();
    }
}
