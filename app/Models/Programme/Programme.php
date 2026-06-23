<?php

declare(strict_types=1);

namespace App\Models\Programme;

use App\Events\NowPlaying;
use App\Models\Description\Description;
use App\Models\Discussion\Discussion;
use App\Models\Presenter\Presenter;
use App\Models\Tag\Tag;
use App\Models\User;
use App\Traits\AboutTrait;
use App\Traits\Taggable;
use Carbon\Carbon;
use Database\Factories\Programme\ProgrammeFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Spatie\Activitylog\Models\Activity;
use Spatie\Activitylog\Models\Concerns\LogsActivity;
use Spatie\Activitylog\Support\LogOptions;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * App\Models\Programme\Programme
 *
 * @property-read Description|null $description
 * @property-read Collection|Discussion[] $discussions
 * @property-read int|null $discussions_count
 * @property-read mixed $about
 * @property-read mixed $content
 * @property-read mixed $cover_image
 * @property-read mixed $excerpt
 * @property-read mixed $summary
 * @property-read Collection|Presenter[] $presenters
 * @property-read int|null $presenters_count
 * @property-read Collection|ProgrammeDay[] $programmeDays
 * @property-read int|null $programme_days_count
 * @property-read Collection|ProgrammeTime[] $programmeTimes
 * @property-read int|null $programme_times_count
 * @property-read Collection|Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\Programme myProgrammes()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\Programme newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\Programme newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\Programme onAir()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\Programme query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\Programme userProgrammes(\App\Models\User $user)
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\Programme whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\Programme whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\Programme whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\Programme whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Programme\Programme whereUpdatedAt($value)
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\Programme\ProgrammeFactory factory($count = null, $state = [])
 * @property-read Collection<int, Episode> $episodes
 * @property-read int|null $episodes_count
 * @property-read Collection<int, Activity> $activitiesAsSubject
 * @property-read int|null $activities_as_subject_count
 * @property-read string $url
 * @mixin \Eloquent
 */
class Programme extends Model implements HasMedia, Searchable
{
    use AboutTrait;
    use HasFactory;
    use HasSlug;
    use InteractsWithMedia;
    use LogsActivity;
    use Taggable;

    public function getActivitylogOptions(): LogOptions
    {
        return LogOptions::defaults()
            ->logOnly(['title'])
            ->logOnlyDirty();
    }

    protected static function newFactory()
    {
        return ProgrammeFactory::new();
    }

    protected static function booted()
    {
        static::updated(function (Programme $programme): void {
            if ($programme->wasChanged('title')) {
                broadcast(new NowPlaying(
                    $programme->title,
                    $programme->coverImage
                ))->toOthers();
            }
        });
    }

    protected $fillable = ['title'];

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
     * Get the search result
     */
    public function getSearchResult(): SearchResult
    {
        $url = route('programme.show', $this->slug);

        return new SearchResult(
            $this,
            $this->id,
            $url
        );
    }

    /**
     * Get presenters for the programme
     *
     * @return void
     */
    public function presenters()
    {
        return $this->belongsToMany(Presenter::class);
    }

    /**
     * Get programme discussions
     *
     * @return void
     */
    public function discussions()
    {
        return $this->hasMany(Discussion::class, 'programme_id');
    }

    /**
     * Get the programme times
     *
     * @return void
     */
    public function programmeTimes()
    {
        return $this->belongsToMany(ProgrammeTime::class);
    }

    /**
     * get the programme days
     *
     * @return void
     */
    public function programmeDays()
    {
        return $this->belongsToMany(ProgrammeDay::class);
    }

    public function episodes()
    {
        return $this->hasMany(Episode::class);
    }

    /**
     * Scope a query to only include current programme on air
     *
     * @param  Builder  $query  //query
     * @return Collection
     */
    public function scopeOnAir($query)
    {
        return $query->whereHas('programmeTimes', function ($query): void {
            $currentTime = \intval(strtotime(Carbon::now()->toTimeString()));
            $query
                ->where('programme_times.day', Carbon::now()->englishDayOfWeek)
                ->where('programme_times.from', '<=', $currentTime)
                ->where('programme_times.to', '>', $currentTime);
        });
    }

    /**
     * Scope a query to only include my programmes
     *
     * @param  Builder  $query  //query
     * @return Builder
     */
    public function scopeMyProgrammes($query)
    {
        return $query->whereHas('users', function ($query): void {
            $query->where('users.id', Auth::user()->id);
        });
    }

    private $user;

    /**
     * Scope a query to only include user programmes
     *
     * @param  Builder  $query  //query
     * @return Builder
     */
    public function scopeUserProgrammes($query, User $user)
    {
        $this->user = $user;

        return $query->whereHas('users', function ($query): void {
            $query->where('users.id', $this->user->id);
        });
    }

    /**
     * Get programme about
     *
     * @return void
     */
    public function getContentAttribute()
    {
        return $this->about;
    }

    public function getUrlAttribute(): string
    {
        return route('programme.show', ['programme' => $this->slug]);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('cover_images')
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

    public function getCoverImageAttribute()
    {
        return $this->getFirstMediaUrl('cover_images');
    }
}
