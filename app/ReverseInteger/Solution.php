<?php

namespace App\ReverseInteger;

class Solution {

    /**
     * @param Integer $x
     * @return Integer
     */
    function reverse($x) {
        // cast to a string and remove any non digit character
        $_x = preg_replace('/[^0-9]/', '', (string) $x);

        // reverse the string
        $_x = strrev($_x);

        // multiply number by 1 to remove any leading zeros (e.g. 120 -> 021)
        $_x = bcmul($_x, '1');

        // multiply by negative 1, for negative numbers
        if ($x < 0) {
            $_x = bcmul($_x, '-1');
        }

        return $_x;
    }
}