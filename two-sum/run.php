<?php

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

$test_1 = twoSum([2, 7, 11, 15], 9);
$test_2 = twoSum([3, 2, 4], 6);
$test_3 = twoSum([3, 3], 6);

print_r($test_1); // 0, 1
print_r($test_2); // 1, 2
print_r($test_3); // 0, 1
