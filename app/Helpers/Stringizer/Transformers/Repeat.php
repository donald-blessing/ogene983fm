<?php

namespace App\Helpers\Stringizer\Transformers;

use App\Helpers\Stringizer\Stringizer;

/**
 * Repeat - Returns a string repeated n times.
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Repeat extends Transformer implements TransformerInterface
{
    public function __construct($value, private $repeatNum)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        $s = new Stringizer($this->repeatNum);

        if ($s->isNumber() && $this->repeatNum > 0) {

            $value = '';

            for ($i = 0; $i < $this->repeatNum; $i++) {
                $value .= $this->getValue();
            }

            return $value;
        } else {
            // Do nothing just return the same value
            return $this->getValue();
        }
    }
}
