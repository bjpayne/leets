<?php

namespace App\LongestSubstringWithoutRepeatingCharacters;

use PHPUnit\Framework\Assert;

require_once __DIR__ . '/../../vendor/autoload.php';

$solution = new Solution();

Assert::assertEquals($solution->lengthOfLongestSubstring('umvejcuuk'), 6);
Assert::assertEquals($solution->lengthOfLongestSubstring('bbbbb'), 1);
Assert::assertEquals($solution->lengthOfLongestSubstring('abcabcbb'), 3);
Assert::assertEquals($solution->lengthOfLongestSubstring('jxdlnaaij'), 6);
Assert::assertEquals($solution->lengthOfLongestSubstring('pwwkew'), 3);
Assert::assertEquals($solution->lengthOfLongestSubstring('dvdf'), 3);
Assert::assertEquals($solution->lengthOfLongestSubstring('dvvfd'), 3);
Assert::assertEquals($solution->lengthOfLongestSubstring(' '), 1);
Assert::assertEquals($solution->lengthOfLongestSubstring(''), 0);

echo 'All tests passed';
