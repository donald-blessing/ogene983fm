<?php

namespace App\Helpers\Stringizer\Transformers;

/**
 * ChopRight - Removes suffix from start of string.
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class ChopRight extends Transformer implements TransformerInterface
{
    public function __construct($value, private $suffix)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        $str = $this->getValue();

        if (mb_substr($this->getValue(), mb_strlen($this->getValue()) - mb_strlen((string) $this->suffix), mb_strlen((string) $this->suffix)) == $this->suffix) {
            $str = mb_substr($str, 0, mb_strlen($str) - mb_strlen((string) $this->suffix));
        }

        return $str;
    }
}
