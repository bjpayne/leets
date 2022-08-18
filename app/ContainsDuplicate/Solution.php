<?php

namespace App\ContainsDuplicate;

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function containsDuplicate($nums)
    {
        $seen = [];

        for ($i = 0; $i < count($nums); $i++) {
            if (!empty($seen[$nums[$i]])) {
                return true;
            }

            $seen[$nums[$i]] = true;
        }

        return false;
    }
}