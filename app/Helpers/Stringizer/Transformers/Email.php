<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * Email - Checks if value is a valid email.
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Email extends Transformer implements TransformerInterface
{
    public function execute()
    {
        if (filter_var($this->getValue(), FILTER_VALIDATE_EMAIL) !== false) {
            return true;
        } else {
            return false;
        }
    }
}
