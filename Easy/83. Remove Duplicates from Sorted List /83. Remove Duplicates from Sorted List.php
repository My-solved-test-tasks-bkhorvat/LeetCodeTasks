<?php

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
class Solution
{

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function deleteDuplicates($head)
    {
        $arr = array();
        while ($head) {
            $arr[] = $head->val;
            $head = $head->next;
        }

        $arr = array_unique($arr);
        arsort($arr);

        foreach ($arr as $value) {
            if (!$obj) {
                $obj = [
                    "val" => $value,
                    "next" => null
                ];
                $obj = (object)$obj;
            } else {
                $obj = [
                    "val" => $value,
                    "next" => $obj
                ];
                $obj = (object)$obj;
            }
        }
        return $obj;
    }
}