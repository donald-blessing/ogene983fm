<?php

namespace App\Helpers\Stringizer\Transformers;

/**
 * StringFindPosition - wrapper for stripos, finds position of first occurrence of a string within another
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class StringFindPosition extends TransformerCaseInsensitive implements TransformerInterface
{
    public function __construct($value, private $needle, private $offset = 0)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        if ($this->isCaseInsensitive()) {
            return mb_stripos($this->getValue(), (string) $this->needle, $this->offset);
        } else {
            return mb_strpos($this->getValue(), (string) $this->needle, $this->offset);
        }
    }
}
