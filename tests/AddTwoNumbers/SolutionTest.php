<?php

namespace Tests\AddTwoNumbers;

use App\AddTwoNumbers\ListNode;
use App\AddTwoNumbers\Solution;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class SolutionTest extends TestCase
{
    public function test1()
    {
        $list1 = [2, 4, 3];
        $list2 = [5, 6, 4];

        $assertion = [7, 0, 8];

        $this->test($list1, $list2, $assertion);
    }

    public function test2()
    {
        $list1 = [0];
        $list2 = [0];

        $assertion = [0];

        $this->test($list1, $list2, $assertion);
    }

    public function test3()
    {
        $list1 = [9,9,9,9,9,9,9];
        $list2 = [9,9,9,9];

        $assertion = [8, 9, 9, 9, 0, 0, 0, 1];

        $this->test($list1, $list2, $assertion);
    }

    protected function test($list1, $list2, $assertion)
    {
        $solution = new Solution();

        $list1 = $solution->buildLinkedList(new ListNode(array_pop($list1)), $list1);
        $list2 = $solution->buildLinkedList(new ListNode(array_pop($list2)), $list2);

        $output_list = $solution->addTwoNumbers($list1, $list2);

        $output_list_values = [];

        while (! empty($output_list->next)) {
            $output_list_values[] = $output_list->val;

            $output_list = $output_list->next;
        }

        $output_list_values[] = $output_list->val;

        Assert::assertEquals($output_list_values, $assertion);
    }
}