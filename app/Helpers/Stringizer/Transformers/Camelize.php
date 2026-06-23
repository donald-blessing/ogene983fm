<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

use App\Helpers\Stringizer\Stringizer;

/**
 * Camelize - Removes any underscores or dashes and converts a string into camel case.
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Camelize extends Transformer implements TransformerInterface
{
    public function execute()
    {
        $s = new Stringizer($this->getValue());
        $s->replace([
            '_',
            '-',
        ], [
            ' ',
            ' ',
        ])
            ->lowercase()
            ->uppercaseWords()
            ->replace(' ', '')
            ->lowercaseFirst(true);

        return $s->getString();
    }
}
