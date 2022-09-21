<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        for ($i = 0; $i < count($nums); $i++) {
            for ($k = $i + 1; $k < count($nums); $k++) {
                if ($nums[$k] == $target - $nums[$i]) {
                    return array($i, $k);
                }
            }
        }
    }
}