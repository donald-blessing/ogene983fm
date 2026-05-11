<?php

namespace App\Models\Discussion;

use App\Models\Description\Description;
use App\Models\Image\Image;
use App\Models\Presenter\Presenter;
use App\Models\Programme\Programme;
use App\Models\Tag\Tag;
use App\Models\Upload\Upload;
use App\Traits\AboutTrait;
use App\Traits\Taggable;
use App\Traits\UploadFiles;
use App\Traits\UploadImage;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Laravelista\Comments\Comment;
use Laravelista\Comments\Commentable;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * App\Models\Discussion\Discussion
 *
 * @property-read Collection|Comment[] $approvedComments
 * @property-read int|null $approved_comments_count
 * @property-read Collection|Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read Description|null $description
 * @property-read mixed $about
 * @property-read mixed $content
 * @property-read mixed $excerpt
 * @property-read mixed $presenters
 * @property-read mixed $programme_name
 * @property-read mixed $summary
 * @property-read Presenter $presenter
 * @property-read Programme $programme
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Discussion\Discussion myThreads()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Discussion\Discussion newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Discussion\Discussion newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Discussion\Discussion query()
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property int $programme_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Discussion\Discussion whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Discussion\Discussion whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Discussion\Discussion whereProgrammeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Discussion\Discussion whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Discussion\Discussion whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Discussion\Discussion whereUpdatedAt($value)
 *
 * @property-read mixed $cover_image
 * @property-read Image|null $image
 * @property-read Collection|Tag[] $tags
 * @property-read int|null $tags_count
 * @property-read Collection|Upload[] $uploads
 * @property-read int|null $uploads_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Discussion whereContent($value)
 *
 * @mixin \Eloquent
 */
class Discussion extends Model implements Searchable
{
    use AboutTrait;
    use Commentable;
    use HasSlug;
    use Taggable;
    use UploadFiles;
    use UploadImage;

    protected $fillable = [
        'content',
        'conversation_id',
        'id',
        'presenter_id',
        'slug',
        'title',
    ];

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

    public function getSearchResult(): SearchResult
    {
        $url = route('discussion.show', $this->slug);

        return new SearchResult(
            $this,
            $this->id,
            $url
        );
    }

    public function presenter()
    {
        return $this->belongsTo(Presenter::class);
    }

    public function programme()
    {
        return $this->belongsTo(Programme::class);
    }

    public function getProgrammeNameAttribute()
    {
        return $this->programme->title;
    }

    public function getPresentersAttribute()
    {
        return $this->programme->presenters;
    }

    public function scopeMyThreads($query)
    {
        return $query->whereHas('users', function ($query): void {
            $query->where('users.id', Auth::user()->id);
        });
    }

    public function getContentAttribute()
    {
        return $this->about;
    }

    public function url(): string
    {
        return route('discussion.show', $this->slug);
    }
}
