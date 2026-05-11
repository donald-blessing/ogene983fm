<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * Ipv4 - Checks if value is a valid IP, IPv4.
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Ipv4 extends Transformer implements TransformerInterface
{
    public function execute()
    {
        if (filter_var($this->getValue(), FILTER_VALIDATE_IP) !== false) {
            return true;
        } else {
            return false;
        }
    }
}
