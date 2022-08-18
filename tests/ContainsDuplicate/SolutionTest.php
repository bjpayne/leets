<?php

namespace Tests\ContainsDuplicate;

use App\ContainsDuplicate\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test1()
    {
        $solution = new Solution();

        $this->assertEquals(true, $solution->containsDuplicate([1,2,3,1]));
    }

    public function test2()
    {
        $solution = new Solution();

        $this->assertEquals(false, $solution->containsDuplicate([1,2,3,4]));
    }

    public function test3()
    {
        $solution = new Solution();

        $this->assertEquals(true, $solution->containsDuplicate([1,1,1,3,3,4,3,2,4,2]));
    }

    public function test4()
    {
        $solution = new Solution();

        $this->assertEquals(true, $solution->containsDuplicate([2,14,18,22,22]));
    }

    public function test5()
    {
        $solution = new Solution();

        $this->assertEquals(true, $solution->containsDuplicate([22,2,14,18,22]));
    }
}