<?php
//Time Limit Exceeded
class Solution
{

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height)
    {
        $maxArea = 0;

        for ($i = 0; $i < count($height); $i++) {
            if ($height[$i] == 0) {
                continue;
            }

            for ($k = count($height); $k >= $i + 1; $k--) {
                if ($height[$k] == 0) {
                    continue;
                }
                $lenght = ($k + 1) - ($i + 1);

                if ($maxHeight > $height[$i] && $maxLenght > $lenght) {
                    break;
                }

                if ($height[$i] <= $height[$k]) {
                    $maxHeight = $height[$i];
                } else {
                    $maxHeight = $height[$k];
                }
                $area = $maxHeight * $lenght;

                if ($area > $maxArea) {
                    $maxLenght = $lenght;
                    $maxArea = $area;
                }

                if ($height[$i] < $height[$k]) {
                    break;
                }
            }
        }
        return $maxArea;
    }
}