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
        $counts = [];

        $frequency = array_pad([], count($nums) + 1, []);

        $result = [];

        foreach ($nums as $num) {
            if (empty($counts[$num])) {
                $counts[$num] = 0;
            }

            $counts[$num] = $counts[$num] + 1;
        }

        foreach ($counts as $num => $count) {
            $frequency[$count][] = $num;
        }

        for ($i = count($frequency) - 1; $i > 0; $i--) {
            for ($j = 0; $j < count($frequency[$i]); $j++) {
                $result[] = $frequency[$i][$j];
            }

            if (count($result) == $k) {
                break;
            }
        }

        return $result;
    }
}