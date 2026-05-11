<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * Ipv6 - Checks if value is a valid IP, IPv6.
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Ipv6 extends Transformer implements TransformerInterface
{
    public function execute()
    {
        if (filter_var($this->getValue(), FILTER_VALIDATE_IP, FILTER_FLAG_IPV6) !== false) {
            return true;
        } else {
            return false;
        }
    }
}
