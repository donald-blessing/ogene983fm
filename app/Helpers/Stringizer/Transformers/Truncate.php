<?php

namespace App\Helpers\Stringizer\Transformers;

/**
 * Truncate - Shorten right side of string by the specified indicated amount
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Truncate extends Transformer implements TransformerInterface
{
    public function __construct($value, private $numberToTruncate)
    {
        parent::__construct($value);
    }

    /**
     * Truncate of string
     */
    public function execute()
    {
        $length = mb_strlen($this->getValue());

        if (filter_var($this->numberToTruncate, FILTER_VALIDATE_INT) === false) {
            throw new \InvalidArgumentException('Value to truncate by is not a number');
        } elseif (filter_var($this->numberToTruncate, FILTER_VALIDATE_INT, [
            'options' => [
                'min_range' => 0,
                'max_range' => $length,
            ],
        ]) === false) {
            throw new \InvalidArgumentException('Value to truncate by is out of bounds');
        } else {
            return (new SubString($this->getValue(), 0, $length - $this->numberToTruncate))->execute();
        }
    }
}
