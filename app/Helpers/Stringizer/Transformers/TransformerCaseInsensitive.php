<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

use Stringizer\Transformers\TransformerCaseInsenitive;

/**
 * TransformerCaseInsensitive
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class TransformerCaseInsensitive extends Transformer
{
    /**
     * Flag to ignore case
     *
     * @var boolean;
     */
    private $caseInsensitive = false;

    /**
     * Enable Case Insensitive (ignore case checking)
     *
     * @return TransformerCaseInsenitive
     */
    public function enableCaseInsensitive()
    {
        $this->caseInsensitive = true;

        return $this;
    }

    /**
     * Is Case Insensitive enabled
     *
     * @return bool
     */
    public function isCaseInsensitive()
    {
        return $this->caseInsensitive;
    }
}
