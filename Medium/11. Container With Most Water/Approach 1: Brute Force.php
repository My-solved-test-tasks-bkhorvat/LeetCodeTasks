<?php

class Solution
{

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height)
    {
        $maxArea = 0;

        for ($left = 0; $left < count($height); $left++) {
            for ($right = $left + 1; $right < count($height); $right++) {
                $width = $right - $left;

                $maxArea = max($maxArea, min($height[$left], $height[$right]) * $width);
            }
        }

        return $maxArea;
    }
}