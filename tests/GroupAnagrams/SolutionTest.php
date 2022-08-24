<?php

namespace Tests\GroupAnagrams;

use App\GroupAnagrams\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test1()
    {
        $solution = new Solution();

        $this->assertEquals([["eat","tea","ate"],["tan","nat"],["bat"]], $solution->groupAnagrams(['eat', 'tea', 'tan', 'ate', 'nat', 'bat']));
    }

    public function test2()
    {
        $solution = new Solution();

        $this->assertEquals([['']], $solution->groupAnagrams(['']));
    }

    public function test3()
    {
        $solution = new Solution();

        $this->assertEquals([['a']], $solution->groupAnagrams(['a']));
    }
}