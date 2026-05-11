<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * Number - Checks if value is a whole number, can be a negative number but can not be a decimal number.
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Number extends Transformer implements TransformerInterface
{
    public function execute()
    {
        if (filter_var($this->getValue(), FILTER_VALIDATE_INT) !== false) {
            return true;
        } else {
            return false;
        }
    }
}
