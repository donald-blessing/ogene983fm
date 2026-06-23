<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * EndsWith - Checks if a string ends with the specified suffix.
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class EndsWith extends Transformer implements TransformerInterface
{
    public function __construct($value, private $needle)
    {
        parent::__construct($value);
    }

    /**
     * EndsWith
     */
    public function execute()
    {
        return mb_substr($this->getValue(), -(mb_strlen((string) $this->needle))) === $this->needle;
    }
}
