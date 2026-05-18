<?php

declare(strict_types=1);

namespace App\Services;

use App\Models\User;
use Carbon\Carbon;

class LoyaltyService
{
    public const DAILY_LOGIN = 10;
    public const POST_READ = 2;
    public const NEWSLETTER_SUBSCRIBE = 20;
    public const CONTACT_SUBMISSION = 5;

    public function awardDailyLoginPoints(User $user): void
    {
        $alreadyAwarded = $user->loyaltyLogs()
            ->where('action_type', 'daily_login')
            ->whereDate('created_at', Carbon::today())
            ->exists();

        if (!$alreadyAwarded) {
            $user->addLoyaltyPoints(self::DAILY_LOGIN, 'Daily login reward', 'daily_login');
        }
    }

    public function awardPostReadPoints(User $user, int $postId): void
    {
        // Limit points per post per user to avoid abuse
        $alreadyAwarded = $user->loyaltyLogs()
            ->where('action_type', 'post_read')
            ->where('reason', "Read post #$postId")
            ->exists();

        if (!$alreadyAwarded) {
            $user->addLoyaltyPoints(self::POST_READ, "Read post #$postId", 'post_read');
        }
    }

    public function awardNewsletterPoints(User $user): void
    {
        $user->addLoyaltyPoints(self::NEWSLETTER_SUBSCRIBE, 'Subscribed to newsletter', 'newsletter_subscribe');
    }

    public function awardContactPoints(User $user): void
    {
        $user->addLoyaltyPoints(self::CONTACT_SUBMISSION, 'Sent a contact message', 'contact_submission');
    }
}
