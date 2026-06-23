<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * Contains - Search for string within another string, return true if found else return false
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Contains extends TransformerCaseInsensitive implements TransformerInterface
{
    public function __construct($value, private $needle)
    {
        parent::__construct($value);
    }

    public function execute()
    {
        if ($this->isCaseInsensitive()) {
            if ((new StringFindPosition($this->getValue(), $this->needle))->enableCaseInsensitive()->execute()) {
                return true;
            } else {
                return false;
            }
        } elseif ((new StringFindPosition($this->getValue(), $this->needle))->execute()) {
            return true;
        } else {
            return false;
        }
    }
}
