<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target)
    {
        $map = [];
        for ($i = 0; $i < count($nums); $i++) {
            $complement = $target - $nums[$i];
            if (array_key_exists($complement, $map)) {
                return [$i, $map[$complement]];
            }
            $map[$nums[$i]] = $i;
        }
        // In case there is no solution, we'll just return null
        return null;
    }
}