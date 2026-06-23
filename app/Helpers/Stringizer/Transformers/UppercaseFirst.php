<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * UppercaseFirst
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class UppercaseFirst extends Transformer implements TransformerInterface
{
    /**
     * Uppercase the First letter of in the given value
     */
    public function execute()
    {
        return ucfirst($this->getValue());
    }
}
