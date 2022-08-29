<?php

namespace Tests\TopKFrequentElements;

use App\TopKFrequentElements\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test1()
    {
        $solution = new Solution();

        $this->assertEquals([1, 2], $solution->topKFrequent([1, 1, 1, 2, 2, 3], 2));
    }

    public function test2()
    {
        $solution = new Solution();

        $this->assertEquals([1], $solution->topKFrequent([1], 1));
    }

    public function test3()
    {
        $solution = new Solution();

        $this->assertEquals([-1], $solution->topKFrequent([-1, -1], 1));
    }

    public function test4()
    {
        $solution = new Solution();

        $this->assertEquals([1, 2], $solution->topKFrequent([1, 2], 2));
    }
}