<?php

namespace App\MedianOfTwoSortedArrays;

class Solution
{
    public function findMedianSortedArrays($nums1, $nums2)
    {
        $nums3 = array_merge($nums1, $nums2);

        sort($nums3);

        $nums3 = array_values($nums3);

        $nums3_count = count($nums3);

        if ($nums3_count % 2 === 1) {
            $median = $nums3[$nums3_count / 2];
        } else {
            $left = ($nums3_count / 2) - 1;

            $right = $left + 1;

            $median = ($nums3[$left] + $nums3[$right]) / 2;
        }

        return $median;
    }
}