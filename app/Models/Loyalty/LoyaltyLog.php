<?php

declare(strict_types=1);

namespace App\Models\Loyalty;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property int $id
 * @property int $user_id
 * @property int $points
 * @property string $reason
 * @property string $action_type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read User $user
 * @method static \Database\Factories\Loyalty\LoyaltyLogFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LoyaltyLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LoyaltyLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LoyaltyLog query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LoyaltyLog whereActionType($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LoyaltyLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LoyaltyLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LoyaltyLog wherePoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LoyaltyLog whereReason($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LoyaltyLog whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|LoyaltyLog whereUserId($value)
 * @mixin \Eloquent
 */
class LoyaltyLog extends Model
{
    use HasFactory;

    protected static function newFactory()
    {
        return \Database\Factories\Loyalty\LoyaltyLogFactory::new();
    }
    protected $fillable = [
        'user_id',
        'points',
        'reason',
        'action_type',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
