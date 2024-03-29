<?php
namespace App\Helpers\Stringizer\Transformers;

/**
 * Lowercase - First letter of the string is lower cased
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class LowercaseFirst extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    /**
     * Lowercase the First letter of in the given value
     */
    public function execute()
    {
        return lcfirst($this->getValue());
    }
}
