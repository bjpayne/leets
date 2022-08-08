<?php

namespace App\AddTwoNumbers;

require_once __DIR__.'/../../vendor/autoload.php';

use PHPUnit\Framework\Assert;

$solution = new Solution();

$tests = [
    [
        [2,4,3],
        [5,6,4],
        [7, 0, 8]
    ],
    [
        [0],
        [0],
        [0]
    ],
    [
        [9,9,9,9,9,9,9],
        [9,9,9,9],
        [8, 9, 9, 9, 0, 0, 0, 1]
    ]
];

foreach ($tests as $test) {
    $list1 = $solution->buildLinkedList(new ListNode(array_pop($test[0])), $test[0]);
    $list2 = $solution->buildLinkedList(new ListNode(array_pop($test[1])), $test[1]);

    $output_list = $solution->addTwoNumbers($list1, $list2);

    $output_list_values = [];

    while (! empty($output_list->next)) {
        $output_list_values[] = $output_list->val;

        $output_list = $output_list->next;
    }

    $output_list_values[] = $output_list->val;

    Assert::assertEquals($output_list_values, $test[2]);
}

echo 'All tests passed';