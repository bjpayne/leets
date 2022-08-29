<?php

namespace App\TopKFrequentElements;

class Solution
{
    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer[]
     */
    function topKFrequent($nums, $k)
    {
        $map = [];

        foreach ($nums as $num) {
            if (empty($map[$num])) {
                $map[$num] = 0;
            }

            $map[$num] = $map[$num] + 1;
        }

        arsort($map, SORT_NUMERIC);

        $map = array_keys($map);

        $map = array_values(array_slice($map, 0, $k));

        return $map;
    }
}