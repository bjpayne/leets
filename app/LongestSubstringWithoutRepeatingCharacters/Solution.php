<?php

namespace App\LongestSubstringWithoutRepeatingCharacters;

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        if (empty($s)) {
            return 0;
        }

        $chars = str_split($s);

        $charSet = [];

        $left = 0; // left side of sliding window

        $result = 0;

        // right pointer goes through every character
        for ($right = 0; $right < count($chars); $right++) {
            // update window and set if there is a duplicate character
            while (in_array($chars[$right], $charSet)) {
                $charSet = array_diff($charSet, [$chars[$left]]);

                $left = $left + 1;
            }

            // Update the character set with rightmost character
            $charSet[] = $chars[$right];

            // Set the result to the largest window size
            $result = max($result, ($right - $left) + 1);
        }

        return $result;
    }
}