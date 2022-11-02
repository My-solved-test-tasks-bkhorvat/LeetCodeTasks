<?php

/* Definition for a singly-linked list.
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
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    public function objToArray($obj)
    {
        $arr = array();
        while ($obj) {
            $arr[] = $obj->val;
            $obj = $obj->next;
        }
        return $arr;
    }

    public function arrayToObj($arr)
    {

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

    function mergeTwoLists($list1, $list2)
    {

        $list1Arr = $this->objToArray($list1);
        $list2Arr = $this->objToArray($list2);

        $resultArr = array_merge($list1Arr, $list2Arr);
        arsort($resultArr);
        $result = $this->arrayToObj($resultArr);

        return $result;
    }
}