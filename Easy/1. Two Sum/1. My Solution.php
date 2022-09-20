<?php

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