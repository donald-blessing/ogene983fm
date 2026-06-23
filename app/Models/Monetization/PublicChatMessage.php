<?php

declare(strict_types=1);

namespace App\Models\Monetization;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property int $user_id
 * @property string $message
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property-read User $user
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PublicChatMessage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PublicChatMessage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PublicChatMessage query()
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PublicChatMessage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PublicChatMessage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PublicChatMessage whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PublicChatMessage whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder<static>|PublicChatMessage whereUserId($value)
 * @mixin \Eloquent
 */
class PublicChatMessage extends Model
{
    protected $table = 'public_chat_messages';

    protected $fillable = [
        'user_id',
        'message',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
