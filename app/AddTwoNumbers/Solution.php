<?php

namespace App\AddTwoNumbers;

class Solution {

    /**
     * @param ListNode $list1
     * @param ListNode $list2
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