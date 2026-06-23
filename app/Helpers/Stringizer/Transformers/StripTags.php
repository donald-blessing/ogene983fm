<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * Strip Tags - Remove HTML and PHP tags from a string
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class StripTags extends Transformer implements TransformerInterface
{
    public function __construct($value, private $allowableTags = '')
    {
        parent::__construct($value);
    }

    public function execute()
    {
        return strip_tags($this->getValue(), $this->allowableTags);
    }
}
