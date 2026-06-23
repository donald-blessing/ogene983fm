<?php

declare(strict_types=1);

namespace App\Models\Engagement;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * @property int $id
 * @property int|null $user_id
 * @property string|null $guest_name
 * @property bool $is_played
 * @property Carbon|null $played_at
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @property-read User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShoutOut newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShoutOut newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShoutOut query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShoutOut whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShoutOut whereGuestName($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShoutOut whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShoutOut whereIsPlayed($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShoutOut wherePlayedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShoutOut whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|ShoutOut whereUserId($value)
 * @mixin \Eloquent
 */
class ShoutOut extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'user_id',
        'guest_name',
        'is_played',
        'played_at',
    ];

    protected function casts(): array
    {
        return [
            'is_played' => 'boolean',
            'played_at' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('audio')
            ->singleFile();
    }
}
