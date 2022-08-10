<?php

namespace App\LongestPalindromicSubstring;

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $result = '';

        $chars = str_split($s);

        if (count($chars) == 1) {
            return $chars[0];
        }

        if (count($chars) == 2) {
            if ($chars[0] == $chars[1]) {
                return $s;
            }

            return $chars[0];
        }

        // Entire string is a palindrome
        if ($s == implode('', array_reverse($chars))) {
            return $s;
        }

        $char_count = count($chars);

        for ($i = 0; $i < $char_count; $i++) {
            $left = $right = $i;

            $is_even = $char_count % 2 === 0;

            if ($is_even) {
                $right = $i + 1;
            }

            while ($left >= 0 && $right < $char_count && $chars[$left] == $chars[$right]) {
                $length = ($right - $left) + 1;

                if ($length > strlen($result)) {
                    $result = implode('', array_slice($chars, $left, $length));
                }

                $left = $left - 1;

                $right = $right + 1;
            }
        }

        return $result;
    }
}