<?php

namespace App\Helpers\Stringizer\Transformers;

/**
 * StringFirstOccurrence
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class StringFirstOccurrence extends TransformerCaseInsensitive implements TransformerInterface
{
    public function __construct($value, private $needle, private $beforeNeedle = false)
    {
        parent::__construct($value);
    }

    /**
     * StringFirstOccurrence
     */
    public function execute()
    {
        if ($this->isCaseInsensitive()) {
            return mb_stristr($this->getValue(), (string) $this->needle, $this->beforeNeedle);
        } else {
            return mb_strstr($this->getValue(), (string) $this->needle, $this->beforeNeedle);
        }
    }
}
