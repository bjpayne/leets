<?php

namespace App\ProductOfArrayExceptSelf;

class Solution
{
    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function productExceptSelf(array $nums): array
    {
        $prefixProduct = [1];

        $suffixProduct = [];

        $product = [];

        for ($i = 1; $i < count($nums); $i++) {
            $prefixProduct[$i] = $nums[$i - 1] * $prefixProduct[$i - 1];
        }

        $suffixProduct[count($nums) - 1] = 1;

        for ($i = count($nums) - 2; $i >= 0; $i--) {
            $suffixProduct[$i] = $nums[$i + 1] * $suffixProduct[$i + 1];
        }

        for ($i = 0; $i < count($nums); $i++) {
            $product[$i] = $prefixProduct[$i] * $suffixProduct[$i];
        }

        return $product;
    }
}
