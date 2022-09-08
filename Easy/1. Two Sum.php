<?php

/**
 * Given an array of integers nums and an integer target, return indices of the two numbers such that
 * they add up to target.
 * You may assume that each input would have exactly one solution, and you may not use the same element twice.
 *
 * You can return the answer in any order.
 */

//Runtime 2694 ms
function twoSum1($nums, $target)
{
    foreach ($nums as $key => $num) {
        foreach ($nums as $key2 => $num2) {
            if ($key !== $key2 && $num+$num2 == $target) {
                $output = array();
                array_push($output, $key, $key2);
                return $output;
            }
        }
    }
}

// Another best solution. Runtime 145 ms
function twoSum2($nums, $target)
{
    foreach ($nums as $key => $num) {
        unset($nums[$key]);
        $nextKey = array_search(($target - $num), $nums);
        if ($nextKey) {
            return [$key, $nextKey];
        }
    }
}