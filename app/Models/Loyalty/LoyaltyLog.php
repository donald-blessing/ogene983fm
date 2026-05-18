<?php

declare(strict_types=1);

namespace App\Models\Loyalty;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

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
