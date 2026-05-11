<?php

namespace App\Helpers\Stringizer\Transformers;

/**
 * Split - Explode string into an array default delimiter is comma
 *
 * Note this multibyte safe see http://www.php.net/explode
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Split extends Transformer implements TransformerInterface
{
    public function __construct($value, private $delimiter)
    {
        parent::__construct($value);
    }

    /**
     * Split string
     *
     * @return array
     */
    public function execute()
    {
        return explode($this->delimiter, $this->getValue());
    }
}
