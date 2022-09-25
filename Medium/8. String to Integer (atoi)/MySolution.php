<?php

class Solution
{

/**
* @param String $s
* @return Integer
*/
    function myAtoi($s)
    {
        $s = ltrim($s, " ");

        if ($s[0] == "-") {
            $s = substr($s, 1);
            $minus = "-";
        } elseif ($s[0] == "+") {
            $s = substr($s, 1);
        }

        for ($i = 0; $i < strlen($s); $i++) {
            if (is_numeric($s[$i])) {
                $number = $number.$s[$i];
            } else {
                break;
            }
        }

        $number = ltrim($number, "0");

        if (!$number) {
            return 0;
        }

        $number = $minus.$number;

        if ($number < -2**31) {
            return -2**31;
        } elseif ($number > 2**31-1) {
            return 2**31-1;
        }

        return $number;
    }
}