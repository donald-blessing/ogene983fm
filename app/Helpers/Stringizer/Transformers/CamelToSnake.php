<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * CamelToSnake - Converts Camel case to Snake Case.
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class CamelToSnake extends Transformer implements TransformerInterface
{
    public function execute()
    {
        return mb_strtolower((string) preg_replace('/(?<=\\w)(?=[A-Z])/', '_$1', $this->getValue()));
    }
}
