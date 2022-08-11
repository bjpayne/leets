<?php

namespace App\LongestPalindromicSubstring;

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $result = '';

        $result_count = 0;

        $chars = str_split($s);

        $char_count = count($chars);

        for ($i = 0; $i < $char_count; $i++) {
            // Odd length check
            $left = $i;
            $right = $i;

            $this->rotate($left, $right, $result_count, $result, $chars, $s);

            // Even length check
            $left = $i;
            $right = $i + 1;

            $this->rotate($left, $right, $result_count, $result, $chars, $s);
        }

        return $result;
    }

    function rotate(&$left, &$right, &$result_count, &$result, $chars, $s)
    {
        while ($left >= 0 && $right < strlen($s) && $chars[$left] == $chars[$right]) {
            $window_size = ($right - $left + 1);

            if ($window_size > $result_count) {
                $result = implode('', array_slice($chars, $left, $window_size));

                $result_count = $window_size;
            }

            $left = $left - 1;

            $right = $right + 1;
        }
    }
}