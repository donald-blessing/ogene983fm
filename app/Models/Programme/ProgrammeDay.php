<?php

declare(strict_types=1);

namespace App\Models\Programme;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Programme\ProgrammeDay
 *
 * @property-read mixed $day
 * @property-read Collection|Programme[] $programmes
 * @property-read int|null $programmes_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\ProgrammeDay newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\ProgrammeDay newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\ProgrammeDay query()
 * @property int $id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\ProgrammeDay whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\ProgrammeDay whereId($value)
 * @mixin \Eloquent
 */
class ProgrammeDay extends Model
{
    public $timestamps = false;

    public function programmes()
    {
        return $this->belongsToMany(Programme::class);
    }

    public function getDayAttribute($value)
    {
        return ucfirst(strtolower((string) $value));
    }
}
