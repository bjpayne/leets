<?php

namespace Tests\LongestPalindromicSubstring;

use App\LongestPalindromicSubstring\Solution;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test1()
    {
        $solution = new Solution();

        $this->assertEquals('bab', $solution->longestPalindrome('babad'));
    }

    public function test2()
    {
        $solution = new Solution();

        $this->assertEquals('bb', $solution->longestPalindrome('cbbd'));
    }

    public function test3()
    {
        $solution = new Solution();

        $this->assertEquals('b', $solution->longestPalindrome('b'));
    }

    public function test4()
    {
        $solution = new Solution();

        $this->assertEquals('bbbb', $solution->longestPalindrome('bbbb'));
    }

    public function test5()
    {
        $solution = new Solution();

        $this->assertEquals('bab', $solution->longestPalindrome('ccbabad'));
    }

    public function test6()
    {
        $solution = new Solution();

        $this->assertEquals('sknks', $solution->longestPalindrome("jglknendplocymmvwtoxvebkekzfdhykknufqdkntnqvgfbahsljkobhbxkvyictzkqjqydczuxjkgecdyhixdttxfqmgksrkyvopwprsgoszftuhawflzjyuyrujrxluhzjvbflxgcovilthvuihzttzithnsqbdxtafxrfrblulsakrahulwthhbjcslceewxfxtavljpimaqqlcbrdgtgjryjytgxljxtravwdlnrrauxplempnbfeusgtqzjtzshwieutxdytlrrqvyemlyzolhbkzhyfyttevqnfvmpqjngcnazmaagwihxrhmcibyfkccyrqwnzlzqeuenhwlzhbxqxerfifzncimwqsfatudjihtumrtjtggzleovihifxufvwqeimbxvzlxwcsknksogsbwwdlwulnetdysvsfkonggeedtshxqkgbhoscjgpiel"));
    }
}