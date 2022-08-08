<?php

namespace Tests\MedianOfTwoSortedArrays;

use App\MedianOfTwoSortedArrays\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test1()
    {
        $solution = new Solution();

        $this->assertEquals(2.0, $solution->findMedianSortedArrays([1, 3], [2]));
    }
}