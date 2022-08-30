<?php

namespace App\ProductOfArrayExceptSelf;

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf($nums): array
    {
        $results = [];

        for ($i = 0; $i < count($nums); $i++) {
            $result = 1;

            for ($j = 0; $j < count($nums); $j++) {
                if ($i !== $j) {
                    $result = $result * $nums[$j];
                }
            }

            $results[] = $result;
        }

        return $results;
    }
}
