<?php

namespace App\ValidAnagram;

class Solution
{
    function isAnagram($s, $t)
    {
        $s_chars = str_split($s);

        $t_chars = str_split($t);

        sort($s_chars);

        sort($t_chars);

        $s_sorted = implode('', $s_chars);

        $t_sorted = implode('', $t_chars);

        return $s_sorted == $t_sorted;
    }
}
