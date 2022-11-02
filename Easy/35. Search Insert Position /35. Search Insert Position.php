<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function searchInsert($nums, $target)
    {
        $result = array_search($target, $nums);
        if ($result) {
            return $result;
        }

        array_push($nums, $target);
        sort($nums);
        $result = array_search($target, $nums);

        return $result;
    }
}

