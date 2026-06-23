<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * Json - Determines if value is valid JSON
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2017 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Json extends Transformer implements TransformerInterface
{
    public function execute()
    {
        $array = json_decode($this->getValue(), true);

        return ! empty($this->getValue()) && is_string($this->getValue()) && is_array($array) && $array !== [] && json_last_error() === 0;
    }
}
