<?php

namespace App\Models\Image;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

/**
 * App\Models\Image\Image
 *
 * @property-read mixed $image
 * @property-read Model|\Eloquent $imageable
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Image\Image newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Image\Image newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Image\Image query()
 *
 * @property int $id
 * @property string $imageable_type
 * @property int $imageable_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Image\Image whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Image\Image whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Image\Image whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Image\Image whereImageableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Image\Image whereImageableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Image\Image whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class Image extends Model
{
    protected $fillable = ['image'];

    /**
     * Imageable function
     *
     * @return void
     */
    public function imageable()
    {
        return $this->morphTo();
    }

    /**
     * Get the image path
     *
     * @param  string  $value
     * @return string
     */
    public function getImageAttribute($value)
    {
        if (file_exists(asset($value))) {
            return str_replace('/media//home2/ogenefmc/public_html/media', '', asset($value));
        }

        return str_replace('/media//home2/ogenefmc/public_html/media', '', asset('media/'.$value));
    }
}
