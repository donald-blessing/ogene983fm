<?php

namespace App\Models;

use App\Models\Description\Description;
use App\Models\Image\Image;
use App\Models\Metro\Metro;
use App\Models\Post\Post;
use App\Models\Programme\Programme;
use App\Traits\AboutTrait;
use App\Traits\UploadImage;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\DatabaseNotification;
use Illuminate\Notifications\DatabaseNotificationCollection;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Laravelista\Comments\Comment;
use Laravelista\Comments\Commenter;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Traits\HasRoles;
use Spatie\Searchable\Searchable;
use Spatie\Searchable\SearchResult;

/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property string $username
 * @property string $email
 * @property string $password
 * @property string|null $remember_token
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read Collection|Comment[] $approvedComments
 * @property-read int|null $approved_comments_count
 * @property-read Collection|Comment[] $comments
 * @property-read int|null $comments_count
 * @property-read Description|null $description
 * @property-read mixed $about
 * @property-read mixed $cover_image
 * @property-read mixed $excerpt
 * @property-read mixed $is_admin
 * @property-read mixed $is_fan
 * @property-read mixed $is_owner
 * @property-read mixed $is_presenter
 * @property-read mixed $is_super_admin
 * @property-read mixed $summary
 * @property-read Image|null $image
 * @property-read DatabaseNotificationCollection|DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read Collection|Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read Collection|Post[] $posts
 * @property-read int|null $posts_count
 * @property-read Collection|Programme[] $programmes
 * @property-read int|null $programmes_count
 * @property-read Collection|Role[] $roles
 * @property-read int|null $roles_count
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User admins()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User fans()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User presenters()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User role($roles, $guard = null)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User superAdmins()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\User whereUsername($value)
 *
 * @property Carbon|null $email_verified_at
 *
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 *
 * @property-read Collection|Metro[] $metroArticles
 * @property-read int|null $metro_articles_count
 *
 * @method static Builder<static>|User withoutPermission($permissions)
 * @method static Builder<static>|User withoutRole($roles, $guard = null)
 *
 * @mixin \Eloquent
 */
class User extends Authenticatable implements Searchable
{
    use AboutTrait;
    use Commenter;
    use HasRoles;
    use Notifiable;
    use UploadImage;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Boot function
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();
        $users = self::whereNull('slug')->get();
        if ($users) {
            foreach ($users as $user) {
                $user->slug = Str::random(40);
                $user->save();
            }
        }
        self::saving(function ($model): void {
            $model->slug = Str::random(40);
        });
    }

    /**
     * Get the route key for the model.
     */
    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Get search result
     */
    public function getSearchResult(): SearchResult
    {
        $url = route('presenter.show', $this->slug);

        return new SearchResult(
            $this,
            $this->name,
            $url
        );
    }

    /**
     * Get programmes
     */
    public function programmes(): BelongsToMany
    {
        return $this->belongsToMany(Programme::class);
    }

    /**
     * get posts
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class, 'presenter_id');
    }

    /**
     * Get metro articles
     */
    public function metroArticles(): HasMany
    {
        return $this->hasMany(Metro::class, 'user_id');
    }

    /**
     * Check if administrator
     */
    public function getIsAdminAttribute(): bool
    {
        return $this->hasRole('admin');
    }

    /**
     * Check if super administrator
     */
    public function getIsSuperAdminAttribute(): bool
    {
        return $this->hasRole('super admin');
    }

    /**
     * Check if presenter
     */
    public function getIsPresenterAttribute(): bool
    {
        return $this->hasRole('presenter');
    }

    /**
     * Check if a fan
     */
    public function getIsFanAttribute(): bool
    {
        return $this->hasRole('fan');
    }

    /**
     * Check if owner
     */
    public function getIsOwnerAttribute(): bool
    {
        return auth()->user()->id == $this->user->id;
    }

    /**
     * Scope a query to only include admins
     *
     * @param  Builder  $query
     */
    public function scopeAdmins($query): Builder
    {
        return $query->whereHas('roles', function ($query): void {
            $query->where('roles.name', 'admin');
        });
    }

    /**
     * Scope a query to only include super admins
     *
     * @param  Builder  $query
     */
    public function scopeSuperAdmins($query): Builder
    {
        return $query->whereHas('roles', function ($query): void {
            $query->where('roles.name', 'super admin');
        });
    }

    /**
     * Scope a query to only include fans
     *
     * @param  Builder  $query
     */
    public function scopeFans($query): Builder
    {
        return $query->whereHas('roles', function ($query): void {
            $query->where('roles.name', 'fan');
        });
    }

    /**
     * Scope a query to only include presenters
     *
     * @param  Builder  $query
     */
    public function scopePresenters($query): Builder
    {
        return $query->whereHas('roles', function ($query): void {
            $query->where('roles.name', 'presenter');
        });
    }

    /**
     * The attributes that should be cast to native types.
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
        ];
    }
}
