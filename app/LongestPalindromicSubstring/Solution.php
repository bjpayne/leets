<?php

namespace App\LongestPalindromicSubstring;

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $chars = str_split($s);

        $chars_count = count($chars);

        $longest_palindrome = '';

        // Go through all characters
        for ($i = 0; $i < $chars_count; $i++) {
            $substring = '';

            // Go through remaining characters
            for ($j = $i; $j < $chars_count; $j++) {
                $substring .= $chars[$j];

                $is_palindrome = $substring == implode(array_reverse(str_split($substring)));

                if ($is_palindrome) {
                    $is_longest_palindrome = strlen($substring) > strlen($longest_palindrome);

                    if ($is_longest_palindrome) {
                        $longest_palindrome = $substring;
                    }
                }
            }
        }

        return $longest_palindrome;
    }
}