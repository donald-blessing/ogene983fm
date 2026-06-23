<?php

declare(strict_types=1);

namespace App\Models\Newsletter;

use Database\Factories\Newsletter\NewsletterSubscriberFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

/**
 * App\Models\Newsletter\NewsletterSubscriber
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\NewsletterSubscriber newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\NewsletterSubscriber newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\NewsletterSubscriber query()
 * @property int $id
 * @property string $UUID
 * @property string $email
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\NewsletterSubscriber whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\NewsletterSubscriber whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\NewsletterSubscriber whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\NewsletterSubscriber whereUUID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Newsletter\NewsletterSubscriber whereUpdatedAt($value)
 * @method static \Database\Factories\Newsletter\NewsletterSubscriberFactory factory($count = null, $state = [])
 * @mixin \Eloquent
 */
class NewsletterSubscriber extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return NewsletterSubscriberFactory::new();
    }

    protected $table = 'newsletter_subscribers';

    protected $fillable = [
        'UUID', 'email',
    ];

    protected static function boot()
    {
        parent::boot();
        NewsletterSubscriber::saving(function ($model): void {
            $model->UUID = (string) Str::random(50);
        });
    }

    /**
     * Get the route key for the model.
     *
     * @return string
     */
    public function getRouteKeyName()
    {
        return 'UUID';
    }
}
