<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * SubStringCount - Count the number of string occurrences
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class SubStringCount extends TransformerCaseInsensitive implements TransformerInterface
{
    public function __construct($value, private $needle)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        if ($this->isCaseInsensitive()) {
            return mb_substr_count(mb_strtolower($this->getValue()), mb_strtolower((string) $this->needle));
        } else {
            return mb_substr_count($this->getValue(), (string) $this->needle);
        }
    }
}
