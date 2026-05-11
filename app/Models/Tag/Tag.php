<?php

namespace App\Models\Tag;

use App\Models\Category\Category;
use App\Models\Discussion\Discussion;
use App\Models\Gallery\Album;
use App\Models\Post\Post;
use App\Models\Presenter\Presenter;
use App\Models\Programme\Programme;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * App\Models\Tag\Tag
 *
 * @property-read Collection|Album[] $albums
 * @property-read int|null $albums_count
 * @property-read Collection|Category[] $categories
 * @property-read int|null $categories_count
 * @property-read Collection|Discussion[] $discussions
 * @property-read int|null $discussions_count
 * @property-read mixed $name
 * @property-read Collection|Post[] $posts
 * @property-read int|null $posts_count
 * @property-read Collection|Presenter[] $presenters
 * @property-read int|null $presenters_count
 * @property-read Collection|Programme[] $programmes
 * @property-read int|null $programmes_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag\Tag newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag\Tag newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag\Tag query()
 *
 * @property int $id
 * @property string $slug
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag\Tag whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag\Tag whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag\Tag whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag\Tag whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Tag\Tag whereUpdatedAt($value)
 *
 * @mixin \Eloquent
 */
class Tag extends Model implements Searchable
{
    use HasSlug;

    protected $fillable = ['name'];

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('name')
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
        $url = route('tag.show', $this->slug);

        return new SearchResult(
            $this,
            $this->id,
            $url
        );
    }

    public function getNameAttribute($value)
    {
        return ucfirst((string) $value);
    }

    /**
     * Get all of the challenges that are assigned this tag.
     */
    public function albums()
    {
        return $this->morphedByMany(Album::class, 'taggable');
    }

    /**
     * Get all of the challenges that are assigned this tag.
     */
    public function categories()
    {
        return $this->morphedByMany(Category::class, 'taggable');
    }

    /**
     * Get all of the challenges that are assigned this tag.
     */
    public function posts()
    {
        return $this->morphedByMany(Post::class, 'taggable');
    }

    /**
     * Get all of the challenges that are assigned this tag.
     */
    public function discussions()
    {
        return $this->morphedByMany(Discussion::class, 'taggable');
    }

    /**
     * Get all of the challenges that are assigned this tag.
     */
    public function programmes()
    {
        return $this->morphedByMany(Programme::class, 'taggable');
    }

    /**
     * Get all of the challenges that are assigned this tag.
     */
    public function presenters()
    {
        return $this->morphedByMany(Presenter::class, 'taggable');
    }
}
