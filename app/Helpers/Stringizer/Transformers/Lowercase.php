<?php

namespace App\Helpers\Stringizer\Transformers;

/**
 * Lowercase - Ensure the string is entirely lower case
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Lowercase extends Transformer implements TransformerInterface
{
    /**
     * Lower case everything
     */
    public function execute()
    {
        return mb_strtolower($this->getValue(), \mb_internal_encoding());
    }
}
