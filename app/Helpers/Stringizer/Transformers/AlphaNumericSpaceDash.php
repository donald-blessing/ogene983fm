<?php
namespace App\Helpers\Stringizer\Transformers;

/**
 * AlphaNumericSpaceDash - Checks if value is contains alphanumeric values only including space(s) and dash(es).
 *
 * @link https://github.com/jasonlam604/Stringizer
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class AlphaNumericSpaceDash extends Transformer implements TransformerInterface
{

    public function __construct($value)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        if (preg_match('/^[\w\-\s]+$/', $this->getValue())) {
            return true;
        } else {
            return false;
        }
    }
}
