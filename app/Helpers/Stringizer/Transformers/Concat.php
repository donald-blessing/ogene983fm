<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * Concat - Combine string values
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Concat extends Transformer implements TransformerInterface
{
    /**
     * Holds flag to preappend
     *
     * @var bool
     */
    private $isPreAppend;

    /**
     * @param  string  $appendValue
     */
    public function __construct($value, /**
     * Value to append or preappend
     */
        private $appendValue)
    {
        parent::__construct($value);
        $this->setPreAppend(false);
    }

    /**
     * Set flag indicator to pre-append value when true
     *
     * @param  bool  $isPreAppend
     */
    public function setPreAppend($isPreAppend)
    {
        $this->isPreAppend = $isPreAppend;
    }

    /**
     * Append or Pre-append $appendValue with $value
     */
    public function execute()
    {
        if ($this->appendValue === null || empty($this->appendValue)) {
            if ($this->isPreAppend) {
                throw new \InvalidArgumentException('Missing value to preappend with');
            } else {
                throw new \InvalidArgumentException('Missing value to concat with');
            }
        }

        if ($this->isPreAppend) {
            return $this->appendValue.$this->getValue();
        } else {
            return $this->getValue().$this->appendValue;
        }
    }
}
