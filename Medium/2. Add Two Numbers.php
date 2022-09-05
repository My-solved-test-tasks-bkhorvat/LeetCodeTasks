<?php
/**
 * Description Add Two Numbers
 *
 * You are given two non-empty linked lists representing two non-negative integers. The digits are stored in
 * reverse order, and each of their nodes contains a single digit. Add the two numbers and return the sum as a
 * linked list.
 *
 * You may assume the two numbers do not contain any leading zero, except the number 0 itself.
 */

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */

function objToArr($obj) {
    while($obj) {
        $arr[] = $obj->val;
        $obj = $obj->next;
    }
    return $arr;
}
class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $arr1 = objToArr($l1);
        $arr2 = objToArr($l2);

        $num1 = implode(array_reverse($arr1));
        $num2 = implode(array_reverse($arr2));

        $sum = str_split((bcadd($num1, $num2)));

        foreach($sum as $val){
            $result = new ListNode($val, $result);
        }

        return $result;
    }
}