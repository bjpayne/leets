<?php

namespace App\TwoSum;

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $solution = [];

        foreach ($nums as $index => $num) {
            $remainder = $target - $num;

            if (array_key_exists($remainder, $solution)) {
                return [$solution[$remainder], $index];
            }

            $solution[$num] = $index;
        }

        return $solution;
    }
}