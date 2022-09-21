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
            $map[$nums[$i]] = $i;
        }

        for ($i = 0; $i < count($nums); $i++) {
            $complement = $target - $nums[$i];
            if (array_key_exists($complement, $map) && $map[$complement] != $i) {
                return [$i, $map[$complement]];
            }
        }
        // In case there is no solution, we'll just return null
        return null;
    }
}