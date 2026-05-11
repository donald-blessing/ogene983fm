<?php

namespace App\Helpers\Stringizer\Transformers;

/**
 * ChopLeft - Removes prefix from start of string.
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class ChopLeft extends Transformer implements TransformerInterface
{
    public function __construct($value, private $prefix)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        $str = $this->getValue();

        if (mb_substr($this->getValue(), 0, mb_strlen((string) $this->prefix)) == $this->prefix) {
            $str = mb_substr($this->getValue(), mb_strlen((string) $this->prefix));
        }

        return $str;
    }
}
