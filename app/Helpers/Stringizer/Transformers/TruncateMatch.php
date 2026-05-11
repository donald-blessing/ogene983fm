<?php

namespace App\Helpers\Stringizer\Transformers;

/**
 * Truncate - Shorten string left or right side if given substring is match, truncate  match and characters after match or before.
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class TruncateMatch extends TransformerCaseInsensitive implements TransformerInterface
{
    public function __construct($value, private $stringToMatch, private $truncateBefore = false)
    {
        parent::__construct($value);
    }

    /**
     * Truncate of string
     */
    public function execute()
    {
        if ($this->isCaseInsensitive()) {
            $result = (new StringFirstOccurrence($this->getValue(), $this->stringToMatch, $this->truncateBefore))->enableCaseInsensitive()->execute();
        } else {
            $result = (new StringFirstOccurrence($this->getValue(), $this->stringToMatch, $this->truncateBefore))->execute();
        }

        return $result;
    }
}
