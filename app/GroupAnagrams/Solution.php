<?php

namespace App\GroupAnagrams;

class Solution
{
    function groupAnagrams($strs)
    {
        $result = [];

        foreach ($strs as $str) {
            $count = array_combine(range('a', 'z'), array_pad([], 26, 0));

            for ($i = 0; $i < strlen($str); $i++) {
                $key = $str[$i];

                $count[$key] = $count[$key] + 1;
            }

            $result_key = '';

            $count = array_filter($count);

            foreach ($count as $char => $number_of_chars) {
                $result_key .= str_repeat($char, $number_of_chars);
            }

            if (empty($result[$result_key])) {
                $result[$result_key] = [];
            }

            $result[$result_key][] = $str;
        }

        $result = array_values($result);

        return $result;
    }
}
