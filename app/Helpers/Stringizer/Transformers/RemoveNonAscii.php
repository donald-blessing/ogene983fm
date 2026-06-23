<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * RemoveNonAscii - Remove non Ascii characters
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class RemoveNonAscii extends Transformer implements TransformerInterface
{
    /**
     * RemoveNonAscii
     */
    public function execute()
    {
        return preg_replace("/[^(\x20-\x7F)]*/", '', $this->getValue());
    }
}
