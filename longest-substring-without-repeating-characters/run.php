<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $chars = str_split($s);

        $chars_count = count($chars);

        $sub_strings = [];

        for ($i = 0; $i < $chars_count; $i++) {
            $outer_char = $chars[$i];

            if (empty($sub_strings[$outer_char])) {
                $sub_strings[$outer_char] = $outer_char;
            }

            for ($j = $i+1; $j < $chars_count; $j++) {
                if (count($chars) < $j + 1) {
                    break;
                }

                $inner_char = $chars[$j];

                if (! preg_match("/[{$sub_strings[$outer_char]}]/", $inner_char)) {
                    $sub_strings[$outer_char] .= $inner_char;
                } else {
                    break;
                }
            }
        }

        $max = 0;

        foreach ($sub_strings as $sub_string) {
            $max = max($max, strlen($sub_string));
        }

        return $max;
    }
}

$solution = new Solution();

echo $solution->lengthOfLongestSubstring('umvejcuuk').PHP_EOL; // 6
echo $solution->lengthOfLongestSubstring('bbbbb').PHP_EOL; // 1
echo $solution->lengthOfLongestSubstring('abcabcbb').PHP_EOL; // 3
echo $solution->lengthOfLongestSubstring('jxdlnaaij').PHP_EOL; // 6
echo $solution->lengthOfLongestSubstring('pwwkew').PHP_EOL; // 3
echo $solution->lengthOfLongestSubstring('dvdf').PHP_EOL; // 3
echo $solution->lengthOfLongestSubstring('dvvdfd').PHP_EOL; // 3
echo $solution->lengthOfLongestSubstring('').PHP_EOL; // 0
echo $solution->lengthOfLongestSubstring(' ').PHP_EOL; // 1
echo $solution->lengthOfLongestSubstring('b').PHP_EOL; // 1
