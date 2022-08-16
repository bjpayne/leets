<?php

namespace Tests\ReverseInteger;

use App\ReverseInteger\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test1()
    {
        $solution = new Solution();

        $this->assertEquals(321, $solution->reverse(123));
    }

    public function test2()
    {
        $solution = new Solution();

        $this->assertEquals(-321, $solution->reverse(-123));
    }

    public function test3()
    {
        $solution = new Solution();

        $this->assertEquals(21, $solution->reverse(120));
    }

    public function test4()
    {
        $solution = new Solution();

        $this->assertEquals(-2147483641, $solution->reverse(-1463847412));
    }
}