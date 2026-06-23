<?php

declare(strict_types=1);

namespace App\Support;

class StrUtil
{
    /**
     * Check if a value is truly empty (trims strings, filters arrays).
     */
    public static function isReallyEmpty(mixed $value): bool
    {
        if (is_string($value)) {
            $value = trim($value);
        }

        if (is_array($value)) {
            return count(array_filter($value)) === 0;
        }

        return ! isset($value) || $value === '' || $value === null;
    }

    /**
     * Search for any of the needle strings in the haystack.
     */
    public static function containsAny(string $haystack, array|string $needles): bool
    {
        if (is_array($needles)) {
            foreach ($needles as $needle) {
                if (self::containsWholeWord($haystack, $needle)) {
                    return true;
                }
            }

            return false;
        }

        return self::containsWholeWord($haystack, $needles);
    }

    /**
     * Check if string contains a whole word (case-insensitive).
     */
    public static function containsWholeWord(string $haystack, string $needle): bool
    {
        return preg_match("/\b".preg_quote($needle, '/')."\b/i", $haystack) === 1;
    }

    /**
     * Generate a random numeric string.
     */
    public static function randomNumeric(int $length = 10): string
    {
        $numbers = '0123456789';

        return substr(str_shuffle(str_repeat($numbers, $length)), 0, $length);
    }

    /**
     * Format currency amount.
     */
    public static function formatMoney(float $amount, string $currency = 'NGN'): string
    {
        return number_format($amount, 2).' '.$currency;
    }
}
