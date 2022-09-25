<?php

class Solution
{

/**
* @param Integer $x
* @return Integer
*/
    function reverse($x)
    {
        $minus = "";
        if (strstr($x, "-")) {
            $minus = "-";
            $x = ltrim($x, "-");
        }
        $number = strrev($x);
        $number = ltrim($number, "0");
        $number = $minus.$number;

        if (-2**31 > $number || $number > 2**31-1) {
            return 0;
        }
        return $number;
    }
}