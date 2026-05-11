<?php

namespace App\Helpers\Stringizer\Transformers;

/**
 * Between - Extracts a string between left and right strings.
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Between extends Transformer implements TransformerInterface
{
    public function __construct($value, private $left, private $right)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        $str = $this->getValue();

        if (mb_substr($this->getValue(), 0, mb_strlen((string) $this->left)) == $this->left) {
            $str = mb_substr($this->getValue(), mb_strlen((string) $this->left));
        }

        if (mb_substr($this->getValue(), mb_strlen($this->getValue()) - mb_strlen((string) $this->right), mb_strlen((string) $this->right)) == $this->right) {
            $str = mb_substr($str, 0, mb_strlen($str) - mb_strlen((string) $this->right));
        }

        return $str;
    }
}
