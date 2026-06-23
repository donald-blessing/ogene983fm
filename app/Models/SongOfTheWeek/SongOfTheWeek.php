<?php

declare(strict_types=1);

namespace App\Models\SongOfTheWeek;

use App\Models\Description\Description;
use App\Models\Tag\Tag;
use App\Traits\AboutTrait;
use App\Traits\Taggable;
use Carbon\CarbonImmutable;
use Database\Factories\SongOfTheWeek\SongOfTheWeekFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
 * App\Models\SongOfTheWeek\SongOfTheWeek
 *
 * @property-read Description|null $description
 * @property-read mixed $about
 * @property-read string|null $album_art
 * @property-read mixed $excerpt
 * @property-read string|null $song
 * @property-read mixed $summary
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SongOfTheWeek\SongOfTheWeek currentSong()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SongOfTheWeek\SongOfTheWeek newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SongOfTheWeek\SongOfTheWeek newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SongOfTheWeek\SongOfTheWeek query()
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $artist
 * @property string $album
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SongOfTheWeek\SongOfTheWeek whereAlbum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SongOfTheWeek\SongOfTheWeek whereAlbumArt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SongOfTheWeek\SongOfTheWeek whereArtist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SongOfTheWeek\SongOfTheWeek whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SongOfTheWeek\SongOfTheWeek whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SongOfTheWeek\SongOfTheWeek whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SongOfTheWeek\SongOfTheWeek whereSong($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SongOfTheWeek\SongOfTheWeek whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\SongOfTheWeek\SongOfTheWeek whereUpdatedAt($value)
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read Collection<int, Tag> $tags
 * @property-read int|null $tags_count
 * @method static \Database\Factories\SongOfTheWeek\SongOfTheWeekFactory factory($count = null, $state = [])
 * @mixin \Eloquent
 */
class SongOfTheWeek extends Model implements HasMedia, Searchable
{
    use AboutTrait;
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;
    use Taggable;

    protected static function newFactory()
    {
        return SongOfTheWeekFactory::new();
    }

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

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('album_arts')
            ->singleFile();

        $this->addMediaCollection('songs')
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

    public function getAlbumArtAttribute(): ?string
    {
        return $this->getFirstMediaUrl('album_arts');
    }

    public function getSongAttribute(): ?string
    {
        return $this->getFirstMediaUrl('songs');
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
        $programmeUrl = route('programme.show', $this->slug);

        return new SearchResult(
            $this,
            $this->title,
            $programmeUrl
        );
    }

    /**
     * get the current song of the week
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeCurrentSong($query)
    {
        $period = CarbonImmutable::now();

        return $query->whereBetween('created_at', [$period->startOfWeek(), $period->endOfWeek()]);
    }
}
