<?php

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