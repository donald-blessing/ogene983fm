<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * LastIndexOf - Finds position of last occurrence of a string within another
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class LastIndexOf extends TransformerCaseInsensitive implements TransformerInterface
{
    public function __construct($value, private $needle, private $fromIndex = 0)
    {
        parent::__construct($value);
    }

    /**
     * LastIndexOf
     */
    public function execute()
    {
        if ($this->isCaseInsensitive()) {
            return mb_strripos($this->getValue(), (string) $this->needle, $this->fromIndex);
        } else {
            return mb_strrpos($this->getValue(), (string) $this->needle, 0, $this->fromIndex);
        }
    }
}
