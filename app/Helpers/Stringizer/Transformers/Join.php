<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * Join - Concatenates the elements of a to create a single string.
 * The separator string sep is placed between elements in the resulting string.
 *
 * Note if there is already an existing string value and method chaining is used then that value
 * over written
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Join extends Transformer implements TransformerInterface
{
    public function __construct(private $arrayValues, private $separator = ',') {}

    public function execute()
    {
        if (is_array($this->arrayValues)) {
            return implode($this->separator, $this->arrayValues);
        } else {
            throw new \InvalidArgumentException('Value given is not an array');
        }
    }
}
