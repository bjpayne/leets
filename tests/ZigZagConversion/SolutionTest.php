<?php

namespace Tests\ZigZagConversion;

use App\ZigZagConversion\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test1()
    {
        $solution = new Solution();

        $this->assertEquals('PAHNAPLSIIGYIR', $solution->convert('PAYPALISHIRING', 3));
    }

    public function test2()
    {
        $solution = new Solution();

        $this->assertEquals('PINALSIGYAHRPI', $solution->convert('PAYPALISHIRING', 4));
    }
}