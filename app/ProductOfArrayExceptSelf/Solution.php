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
        $product = [1];

        for ($i = 1; $i < count($nums); $i++) {
            $product[$i] = $nums[$i - 1] * $product[$i - 1];
        }

        $suffixProduct = 1;

        for ($i = count($nums) - 1; $i >= 0; $i--) {
            $product[$i] = $product[$i] * $suffixProduct;

            $suffixProduct = $suffixProduct * $nums[$i];
        }

        return $product;
    }
}
