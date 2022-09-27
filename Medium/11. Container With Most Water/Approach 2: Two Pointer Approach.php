<?php

class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $maxArea = 0;
        $left = 0;
        $right = count($height) - 1;
        while ($left < $right) {
            $width = $right - $left;
            $maxArea = max($maxArea, min($height[$left], $height[$right]) * $width);

            if ($height[$left] <= $height[$right]) {
                $left++;
            } else {
                $right--;
            }
        }
        return $maxArea;
    }
}