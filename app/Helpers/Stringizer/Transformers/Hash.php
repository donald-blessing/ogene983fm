<?php

declare(strict_types=1);

namespace App\Helpers\Stringizer\Transformers;

/**
 * Hash - Checks if value is contains a valid hash such MD5
 *
 * Based off isHash in https://github.com/asaskevich/govalidator/blob/master/validator.go
 *
 * @link https://github.com/jasonlam604/Stringizer
 *
 * @copyright Copyright (c) 2016 Jason Lam
 * @license https://github.com/jasonlam604/Stringizer/blob/master/LICENSE.md (MIT License)
 */
class Hash extends Transformer implements TransformerInterface
{
    private $len = 0;

    public function __construct($value, $hashAlgorithm)
    {
        parent::__construct($value);

        $algo = mb_strtolower((string) $hashAlgorithm);

        if ($algo === 'crc32' || $algo === 'crc32b') {
            $this->len = '8';
        } elseif (in_array($algo, ['md5', 'md4', 'ripemd128', 'tiger128'])) {
            $this->len = '32';
        } elseif (in_array($algo, ['sha1', 'ripemd160', 'tiger160'])) {
            $this->len = '40';
        } elseif ($algo === 'tiger192') {
            $this->len = '48';
        } elseif ($algo === 'sha256') {
            $this->len = '64';
        } elseif ($algo === 'sha384') {
            $this->len = '96';
        } elseif ($algo === 'sha512') {
            $this->len = '128';
        } else {
            return;
        }
    }

    public function execute()
    {
        $pattern = '/^[0-9a-f]{'.$this->len.'}$/i';

        if (preg_match($pattern, $this->getValue())) {
            return true;
        } else {
            return false;
        }
    }
}
