<?php

namespace App\GroupAnagrams;

class Solution
{
    function groupAnagrams($strs)
    {
        $sorted_map = [];

        foreach ($strs as $str) {
            $str_chars = str_split($str);

            sort($str_chars);

            $str_key = implode('', $str_chars);

            if (empty($sorted_map[$str_key])) {
                $sorted_map[$str_key] = [];
            }

            $sorted_map[$str_key][] = $str;
        }

        $result = array_values($sorted_map);

        return $result;
    }
}
