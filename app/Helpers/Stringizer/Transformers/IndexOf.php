<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * IndexOf - Finds position of first occurrence of a string within another, if no match is found boolean false is returned
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class IndexOf extends TransformerCaseInsensitive implements TransformerInterface
{
    public function __construct($value, private $needle, private $fromIndex = 0)
    {
        parent::__construct($value);
    }

    /**
     * IndexOf
     */
    public function execute()
    {
        if ($this->isCaseInsensitive()) {
            return mb_stripos($this->getValue(), (string) $this->needle, $this->fromIndex);
        } else {
            return mb_strpos($this->getValue(), (string) $this->needle, $this->fromIndex);
        }
    }
}
