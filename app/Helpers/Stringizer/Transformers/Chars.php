<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * Chars - Split string to an array of characters.
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Chars extends Transformer implements TransformerInterface
{
    public function execute()
    {
        return preg_split('//u', $this->getValue(), -1, PREG_SPLIT_NO_EMPTY);
    }
}
