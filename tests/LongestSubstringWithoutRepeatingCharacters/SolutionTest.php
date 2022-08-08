<?php

namespace tests\LongestSubstringWithoutRepeatingCharacters;

use App\LongestSubstringWithoutRepeatingCharacters\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test1()
    {
        $solution = new Solution();

        $this->assertEquals(6, $solution->lengthOfLongestSubstring('umvejcuuk'));
    }

    public function test2()
    {
        $solution = new Solution();

        $this->assertEquals(1, $solution->lengthOfLongestSubstring('bbbbb'));
    }

    public function test3()
    {
        $solution = new Solution();

        $this->assertEquals(3, $solution->lengthOfLongestSubstring('abcabcbb'));
    }

    public function test4()
    {
        $solution = new Solution();

        $this->assertEquals(6, $solution->lengthOfLongestSubstring('jxdlnaaij'));
    }

    public function test5()
    {
        $solution = new Solution();

        $this->assertEquals(3, $solution->lengthOfLongestSubstring('pwwkew'));
    }

    public function test6()
    {
        $solution = new Solution();

        $this->assertEquals(3, $solution->lengthOfLongestSubstring('dvdf'));
    }

    public function test7()
    {
        $solution = new Solution();

        $this->assertEquals(3, $solution->lengthOfLongestSubstring('dvvfd'));
    }

    public function test8()
    {
        $solution = new Solution();

        $this->assertEquals(1, $solution->lengthOfLongestSubstring(' '));
    }

    public function test9()
    {
        $solution = new Solution();

        $this->assertEquals(0, $solution->lengthOfLongestSubstring(''));
    }
}