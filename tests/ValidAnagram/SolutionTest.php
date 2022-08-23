<?php

namespace Tests\ValidAnagram;

use App\ValidAnagram\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test1()
    {
        $solution = new Solution();

        $this->assertEquals(true, $solution->isAnagram('anagram', 'nagaram'));
    }

    public function test2()
    {
        $solution = new Solution();

        $this->assertEquals(true, $solution->isAnagram('car', 'arc'));
    }

    public function test3()
    {
        $solution = new Solution();

        $this->assertEquals(false, $solution->isAnagram('car', 'rat'));
    }
}