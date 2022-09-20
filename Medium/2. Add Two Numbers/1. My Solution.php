<?php

function objToArr($obj)
{
    while ($obj) {
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
    public function addTwoNumbers($l1, $l2)
    {
        $arr1 = objToArr($l1);
        $arr2 = objToArr($l2);

        $num1 = implode(array_reverse($arr1));
        $num2 = implode(array_reverse($arr2));

        $sum = str_split((bcadd($num1, $num2)));

        $result = null;
        foreach ($sum as $val) {
            $result = new ListNode($val, $result);
        }
        return $result;
    }
}