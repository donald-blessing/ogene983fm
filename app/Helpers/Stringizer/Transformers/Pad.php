<?php

namespace App\Helpers\Stringizer\Transformers;

/**
 * Pad - Pad string left side, right side or both sides
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Pad extends Transformer implements TransformerInterface
{
    private $padType;

    public function __construct($value, private $padValue, private $padAmount, $padType)
    {
        parent::__construct($value);

        if (! in_array($padType, [STR_PAD_RIGHT, STR_PAD_LEFT, STR_PAD_BOTH])) {
            throw new \InvalidArgumentException('Invalid pad side option');
        }

        $this->padType = $padType;
    }

    /**
     * Pad
     */
    public function execute()
    {
        return $this->mbStrPad($this->getValue(), $this->padAmount, $this->padValue, $this->padType);
    }

    /**
     * Code from http://php.net/manual/en/function.str-pad.php
     */
    private function mbStrPad($str, $pad_len, $pad_str = ' ', $dir = STR_PAD_RIGHT, $encoding = null)
    {
        $encoding ??= mb_internal_encoding();
        $padBefore = $dir === STR_PAD_BOTH || $dir === STR_PAD_LEFT;
        $padAfter = $dir === STR_PAD_BOTH || $dir === STR_PAD_RIGHT;
        $pad_len -= mb_strlen((string) $str, $encoding);
        $targetLen = $padBefore && $padAfter ? $pad_len / 2 : $pad_len;
        $strToRepeatLen = mb_strlen((string) $pad_str, $encoding);
        $repeatTimes = ceil($targetLen / $strToRepeatLen);
        $repeatedString = str_repeat((string) $pad_str, max(0, $repeatTimes)); // safe if used with valid utf-8 strings
        $before = $padBefore ? mb_substr($repeatedString, 0, floor($targetLen), $encoding) : '';
        $after = $padAfter ? mb_substr($repeatedString, 0, ceil($targetLen), $encoding) : '';

        return $before.$str.$after;
    }
}
