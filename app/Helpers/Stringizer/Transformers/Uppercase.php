<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * Uppercase - Ensure entire string is uppercase
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Uppercase extends Transformer implements TransformerInterface
{
    /**
     * Upper case everything
     */
    public function execute()
    {
        return mb_strtoupper($this->getValue(), \mb_internal_encoding());
    }
}
