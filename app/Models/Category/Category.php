<?php

declare(strict_types=1);

namespace App\Models\Category;

use App\Models\Description\Description;
use App\Models\Gallery\Album;
use App\Models\Metro\Metro;
use App\Models\Post\Post;
use App\Models\Tag\Tag;
use App\Traits\AboutTrait;
use App\Traits\HasScopeChecks;
use App\Traits\Taggable;
use Database\Factories\Category\CategoryFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

/**
 * App\Models\Category\Category
 *
 * @property-read Collection|Album[] $albums
 * @property-read int|null $albums_count
 * @property-read Collection|Category[] $childrenCategories
 * @property-read int|null $children_categories_count
 * @property-read Description|null $description
 * @property-read mixed $about
 * @property-read mixed $bottom_parent
 * @property-read mixed $cover_image
 * @property-read mixed $excerpt
 * @property-read mixed $parents
 * @property-read mixed $summary
 * @property-read mixed $top_parent
 * @property-read Category $parent
 * @property-read Collection|Post[] $posts
 * @property-read int|null $posts_count
 * @property-read Collection|Category[] $subcategories
 * @property-read int|null $subcategories_count
 * @property-read Collection|Tag[] $tags
 * @property-read int|null $tags_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category\Category featured()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category\Category newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category\Category newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category\Category nonParent()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category\Category query()
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int|null $category_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category\Category whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category\Category whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category\Category whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category\Category whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category\Category whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Category\Category whereUpdatedAt($value)
 * @property-read Collection|Metro[] $metroArticles
 * @property-read int|null $metro_articles_count
 * @property-read MediaCollection<int, Media> $media
 * @property-read int|null $media_count
 * @method static \Database\Factories\Category\CategoryFactory factory($count = null, $state = [])
 * @mixin \Eloquent
 */
class Category extends Model implements HasMedia, Searchable
{
    use AboutTrait;
    use HasFactory;
    use HasScopeChecks;
    use HasSlug;
    use InteractsWithMedia;
    use Taggable;

    protected static function newFactory()
    {
        return CategoryFactory::new();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'slug',
        'category_id',
    ];

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
        // $url = route('category.show', $this->slug);
        return new SearchResult(
            $this,
            $this->id
        );
    }

    public function parent()
    {
        return $this->belongsTo(Category::class);
    }

    public function getParentsAttribute()
    {
        $parents = collect([]);
        $parent = $this->find($this->category_id);
        while (! is_null($parent)) {
            $parents->push($parent);
            $parent = $parent->parent;
        }

        return $parents;
    }

    public function isParent()
    {
        return $this->category_id == null;
    }

    public function getTopParentAttribute()
    {
        return $this->parents->last();
    }

    public function getBottomParentAttribute()
    {
        return $this->parents->first();
    }

    /**
     * get sub categories
     */
    public function childrenCategories()
    {
        return $this->hasMany(Category::class)->with('categories');
    }

    /**
     * get sub categories
     */
    public function subcategories()
    {
        return $this->hasMany(Category::class, 'category_id');
    }

    /**
     * Fetch categories by featured.
     *
     * @param  Builder  $query  *
     * @return Builder
     */
    public function scopeFeatured($query)
    {
        return $query->whereFeatured(1);
    }

    /**
     * Fetch categories by featured.
     *
     * @param  Builder  $query  *
     * @return Builder
     */
    public function scopeNonParent($query)
    {
        return $query->where('category_id', '<>');
    }

    public function metroArticles()
    {
        return $this->hasMany(Metro::class, 'category_id');
    }

    public function posts()
    {
        return $this->hasMany(Post::class, 'category_id');
    }

    public function albums()
    {
        return $this->hasMany(Album::class, 'category_id');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('cover_images')
            ->singleFile();
    }

    public function getCoverImageAttribute()
    {
        return $this->getFirstMediaUrl('cover_images');
    }

    protected function casts(): array
    {
        return [
            'category_id' => 'integer',
        ];
    }
}
