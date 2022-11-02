<?php

class Solution
{

    /**
     * @param Integer[] $digits
     * @return Integer[]
     */
    function plusOne($digits)
    {
        $digits = implode($digits);
        $result = bcadd("$digits", "1");
        $result = str_split($result, 1);

        return $result;
    }
}