<?php

namespace Tests\ProductOfArrayExceptSelf;

use App\ProductOfArrayExceptSelf\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test1()
    {
        $solution = new Solution();

        $this->assertEquals([24, 12, 8, 6], $solution->productExceptSelf([1,2,3,4]));
    }

    public function test2()
    {
        $solution = new Solution();

        $this->assertEquals([1536, 768, 512, 384], $solution->productExceptSelf([4,8,12,16]));
    }
}