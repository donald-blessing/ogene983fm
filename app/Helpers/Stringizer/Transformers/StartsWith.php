<?php

namespace App\Helpers\Stringizer\Transformers;

/**
 * StartsWith - Checks if a string starts with the specified suffix.
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class StartsWith extends Transformer implements TransformerInterface
{
    public function __construct($value, private $needle)
    {
        parent::__construct($value);
    }

    /**
     * StartsWith
     */
    public function execute()
    {
        return mb_substr($this->getValue(), 0, mb_strlen((string) $this->needle)) === $this->needle;
    }
}
