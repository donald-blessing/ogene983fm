<?php

namespace App\Helpers\Stringizer\Transformers;

/**
 * SwapCase - Swap the case of each character.
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class SwapCase extends Transformer implements TransformerInterface
{
    public function execute()
    {
        return $this->swap();
    }

    private function swap()
    {
        $arr = preg_split('//u', $this->getValue(), -1, PREG_SPLIT_NO_EMPTY);
        $len = count($arr);
        for ($i = 0; $i < $len; $i++) {

            if (ctype_alpha($arr[$i])) {

                if (ctype_upper($arr[$i])) {
                    $arr[$i] = mb_strtolower($arr[$i]);
                } elseif (ctype_lower($arr[$i])) {

                    $arr[$i] = mb_strtoupper($arr[$i]);
                }
            }
        }

        return implode('', $arr);
    }
}
