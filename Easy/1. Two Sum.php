<?php

/**
 * Given an array of integers nums and an integer target, return indices of the two numbers such that they add up to target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 *
 * You can return the answer in any order.
 */

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    function twoSum($nums, $target) {
        foreach($nums as $key => $num) {
            foreach($nums as $key2 => $num2) {
                if($key !== $key2) {
                    if($num+$num2 == $target) {
                        $output = array();
                        array_push($output, $key, $key2);
                        return $output;
                    }
                }
            }
        }
    }
}