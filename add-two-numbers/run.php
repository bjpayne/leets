<?php

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($list1, $list2) {
        $result = new ListNode(0);

        $current = $result;

        $carry = 0;

        while (! empty($list1) || ! empty($list2) || (int) $carry !== 0) {
            $sum = bcadd(bcadd(($list1 ? $list1->val : 0), ($list2 ? $list2->val : 0)), $carry);

            $carry = bcdiv($sum, '10');

            $val = bcmod($sum, '10');

            $next_node = new ListNode($val);

            $current->next = $next_node;

            $current = $next_node;

            $list1 = $list1 ? $list1->next : $list1;
            $list2 = $list2 ? $list2->next : $list2;
        }

        return $result->next;
    }

    function buildLinkedList(ListNode $node, &$values) {
        if (empty($values)) {
            return $node;
        }

        $previous_node = new ListNode(array_pop($values));

        $previous_node->next = $node;

        return $this->buildLinkedList($previous_node, $values);
    }
}

/**
 * Testing code...solution is above
 *
 * Example test cases:
 * [2,4,3] [5,6,4]
 * [0] [0]
 * [9,9,9,9,9,9,9] [9,9,9,9]
 */

/**
 * Definition for a singly-linked list.
 */
class ListNode {
    public $val = 0;
    public $next = null;
    function __construct($val = 0, $next = null) {
        $this->val = $val;
        $this->next = $next;
    }
}

$solution = new Solution();

$list1_input = [9,9,9,9,9,9,9];
$list2_input = [9,9,9,9];

$list1 = $solution->buildLinkedList(new ListNode(array_pop($list1_input)), $list1_input);
$list2 = $solution->buildLinkedList(new ListNode(array_pop($list2_input)), $list2_input);

$output_list = $solution->addTwoNumbers($list1, $list2);

$output_list_values = [];

while (! empty($output_list->next)) {
    $output_list_values[] = $output_list->val;

    $output_list = $output_list->next;
}

$output_list_values[] = $output_list->val;

echo '['.implode(',', $output_list_values).']'.PHP_EOL;