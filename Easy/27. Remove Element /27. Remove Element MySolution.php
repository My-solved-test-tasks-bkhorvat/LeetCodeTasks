<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $val
     * @return Integer
     */
    function removeElement(&$nums, $val)
    {
        while (true) {
            $id = array_search($val, $nums);
            if ($id === false) {
                break;
            }
            unset($nums[$id]);
            $id = false;
        }
        return count($nums);
    }
}