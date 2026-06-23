<?php

declare(strict_types=1);

namespace App\Models\Upload;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

/**
 * App\Models\Upload\Upload
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Upload newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Upload newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Upload query()
 * @property int $id
 * @property string $file
 * @property string|null $description
 * @property string $uploadable_type
 * @property int $uploadable_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read string|null $upload
 * @property-read Model|\Eloquent $uploadable
 * @method static \Illuminate\Database\Eloquent\Builder|Upload whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upload whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upload whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upload whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upload whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upload whereUploadableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Upload whereUploadableType($value)
 * @property string|null $title
 * @method static \Illuminate\Database\Eloquent\Builder|Upload whereTitle($value)
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @mixin \Eloquent
 */
class Upload extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    protected $fillable = [];

    public function uploadable()
    {
        return $this->morphTo();
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('files')
            ->singleFile();
    }

    public function getUploadAttribute(): ?string
    {
        return $this->getFirstMediaUrl('files');
    }
}
