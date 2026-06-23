<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * Trim - Remove whitespace both right and left side of the string
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Trim extends Transformer implements TransformerInterface
{
    /**
     * Trim string
     */
    public function execute()
    {
        return preg_replace('/^[\pZ\pC]+|[\pZ\pC]+$/u', '', $this->getValue());
    }
}
