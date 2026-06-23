<?php

declare(strict_types=1);

namespace App\Models\Monetization;

use Database\Factories\Monetization\SponsorshipFactory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\Activitylog\Models\Activity;
use Spatie\Activitylog\Models\Concerns\LogsActivity;
use Spatie\Activitylog\Support\LogOptions;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * @property int $id
 * @property string $title
 * @property string|null $link
 * @property Carbon $start_time
 * @property Carbon $end_time
 * @property bool $is_active
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sponsorship active()
 * @method static \Database\Factories\Monetization\SponsorshipFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sponsorship newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sponsorship newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sponsorship query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sponsorship whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sponsorship whereEndTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sponsorship whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sponsorship whereIsActive($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sponsorship whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sponsorship whereStartTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sponsorship whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sponsorship whereUpdatedAt($value)
 * @property int $clicks
 * @property int $impressions
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sponsorship whereClicks($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|Sponsorship whereImpressions($value)
 * @property-read Collection<int, Activity> $activitiesAsSubject
 * @property-read int|null $activities_as_subject_count
 * @mixin \Eloquent
 */
class Sponsorship extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;
    use LogsActivity;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['title', 'link', 'is_active'])
            ->logOnlyDirty();
    }

    protected static function newFactory()
    {
        return SponsorshipFactory::new();
    }

    protected $fillable = [
        'title',
        'link',
        'start_time',
        'end_time',
        'is_active',
        'clicks',
        'impressions',
    ];

    protected function casts(): array
    {
        return [
            'start_time' => 'datetime',
            'end_time' => 'datetime',
            'is_active' => 'boolean',
        ];
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('banners')
            ->singleFile();
    }

    public function scopeActive($query)
    {
        return $query->where('is_active', true)
            ->where('start_time', '<=', now())
            ->where('end_time', '>=', now());
    }
}
