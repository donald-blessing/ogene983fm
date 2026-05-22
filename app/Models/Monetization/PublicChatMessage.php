<?php

declare(strict_types=1);

namespace App\Models\Monetization;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
