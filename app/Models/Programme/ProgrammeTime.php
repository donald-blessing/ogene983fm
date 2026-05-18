<?php

namespace App\Models\Programme;

use carbon\Carbon;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Programme\ProgrammeTime
 *
 * @property-read mixed $from
 * @property-read mixed $to
 * @property-read Collection|Programme[] $programmes
 * @property-read int|null $programmes_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\ProgrammeTime newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\ProgrammeTime newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\ProgrammeTime onAir()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\ProgrammeTime query()
 * @property int $id
 * @property string $day
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\ProgrammeTime whereDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\ProgrammeTime whereFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\ProgrammeTime whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\ProgrammeTime whereTo($value)
 * @mixin \Eloquent
 */
class ProgrammeTime extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return \Database\Factories\Programme\ProgrammeTimeFactory::new();
    }
    public $timestamps = false;

    protected $fillable = ['day', 'from', 'to'];

    public function programmes()
    {
        return $this->belongsToMany(Programme::class);
    }

    /**
     * Get the start time by converting timestamp to readable time
     *
     * @param  mixed  $value
     */
    public function getFromAttribute($value): string
    {
        return Carbon::createFromTimestamp($value)->toTimeString();
    }

    /**
     * Get the end time by converting timestamp to readable time
     *
     * @param  mixed  $value
     */
    public function getToAttribute($value): string
    {
        return Carbon::createFromTimestamp($value)->toTimeString();
    }

    /**
     * Scope a query to only include the current programme on Air
     *
     * @param  Builder  $query
     * @return Builder
     */
    public function scopeOnAir($query)
    {
        $currentTime = \intval(strtotime(Carbon::now()->toTimeString()));

        return $query->where('day', Carbon::now()->englishDayOfWeek)
            ->where('from', '<=', $currentTime)
            ->where('to', '>', $currentTime);
    }
}
