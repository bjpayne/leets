<?php

namespace App\TwoSum;

use PHPUnit\Framework\Assert;

require_once __DIR__.'/../../vendor/autoload.php';

$solution = new Solution();

Assert::assertEquals($solution->twoSum([2, 7, 11, 15], 9), [0, 1]);
Assert::assertEquals($solution->twoSum([3, 2, 4], 6), [1, 2]);
Assert::assertEquals($solution->twoSum([3, 3], 6), [0, 1]);

echo 'All tests passed';
