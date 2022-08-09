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

    public function test2()
    {
        $solution = new Solution();

        $this->assertEquals(2.5, $solution->findMedianSortedArrays([1, 2], [3, 4]));
    }

    public function test3()
    {
        $solution = new Solution();

        $this->assertEquals(1, $solution->findMedianSortedArrays([1, 1], [1, 2]));
    }
}