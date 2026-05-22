<?php

declare(strict_types=1);

namespace App\Models\Monetization;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

/**
 * @property int $id
 * @property string $title
 * @property string|null $link
 * @property \Illuminate\Support\Carbon $start_time
 * @property \Illuminate\Support\Carbon $end_time
 * @property bool $is_active
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection<int, \Spatie\MediaLibrary\MediaCollections\Models\Media> $media
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
 * @mixin \Eloquent
 */
class Sponsorship extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected static function newFactory()
    {
        return \Database\Factories\Monetization\SponsorshipFactory::new();
    }

    protected $fillable = [
        'title',
        'link',
        'start_time',
        'end_time',
        'is_active',
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
