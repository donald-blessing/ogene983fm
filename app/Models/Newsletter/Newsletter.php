<?php

namespace App\Models\Newsletter;

use App\Models\Description\Description;
use App\Traits\AboutTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * App\Models\Newsletter\Newsletter
 *
 * @property-read Description|null $description
 * @property-read mixed $about
 * @property-read mixed $content
 * @property-read mixed $excerpt
 * @property-read mixed $summary
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\Newsletter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\Newsletter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\Newsletter query()
 *
 * @property int $id
 * @property string $subject
 * @property string $slug
 * @property string $message
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\Newsletter whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\Newsletter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\Newsletter whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\Newsletter whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\Newsletter whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\Newsletter whereSubject($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\Newsletter whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class Newsletter extends Model implements Searchable
{
    use AboutTrait;
    use HasSlug;

    protected $fillable = ['title', 'slug'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug')
            ->slugsShouldBeNoLongerThan(50);
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
        $url = route('post.show', $this->slug);

        return new SearchResult(
            $this,
            $this->id,
            $url
        );
    }

    public function getContentAttribute()
    {
        return $this->about;
    }
}
