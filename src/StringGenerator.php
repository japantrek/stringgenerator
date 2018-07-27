<?php

namespace nvbooster\StringGenerator;

/**
 * @author nvb
 *
 */
class StringGenerator
{
    /**
     * Generate random string with chosen length and symbols
     *
     * @param number $length
     * @param string $chars
     * @param string $encoding
     *
     * @return string
     */
    public static function generate($length = 8, $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789', $encoding = 'UTF-8')
    {
        $s = '';
        $cLength = mb_strlen($chars);

        while (mb_strlen($s, $encoding) < $length) {
            $s .= mb_substr($chars, mt_rand(0, $cLength-1), 1, $encoding);
        }

        return $s;
    }
}
