<?php

declare(strict_types=1);

namespace App\Models\Programme;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * @property int $id
 * @property int $programme_id
 * @property string $title
 * @property string $slug
 * @property string|null $description
 * @property string|null $duration
 * @property Carbon|null $published_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read Programme $programme
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode whereDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode whereProgrammeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Episode whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Episode extends Model implements HasMedia
{
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;

    protected $fillable = [
        'programme_id',
        'title',
        'slug',
        'description',
        'duration',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'datetime',
        ];
    }

    public function programme(): BelongsTo
    {
        return $this->belongsTo(Programme::class);
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('audio')
            ->singleFile();
    }
}
