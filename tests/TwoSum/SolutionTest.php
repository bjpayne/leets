<?php

namespace Tests\TwoSum;

use App\TwoSum\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test1()
    {
        $solution = new Solution();

        $this->assertEquals([0, 1], $solution->twoSum([2, 7, 11, 15], 9));
    }

    public function test2()
    {
        $solution = new Solution();

        $this->assertEquals([1, 2], $solution->twoSum([3, 2, 4], 6));
    }

    public function test3()
    {
        $solution = new Solution();

        $this->assertEquals([0, 1], $solution->twoSum([3, 3], 6));
    }
}