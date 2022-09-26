<?php

class Solution
{

/**
* @param String $s
* @param Integer $numRows
* @return String
*/

    function convert($s, $numRows)
    {
        if ($numRows == 1 || strlen($s) <= $numRows) {
            return $s;
        }

        while ($s) {
            for ($i = 0; $i < $numRows; $i++) {
                $arr[$i] .= $s[$i];
            }
            if ($numRows != 2) {
                $substr = substr($s, $numRows-1, $numRows);
                if (strlen($substr) >= $numRows) {
                    $substr = strrev(substr($substr, 1, -1));
                } else {
                    $substr = strrev(substr($substr, 1));
                }

                $k = $numRows - 1;
                for ($i = strlen($substr); $i >= 0; $i--) {
                    $arr[$k] = $arr[$k].$substr[$i];
                    $k--;
                }
            }
            $s = substr($s, $numRows*2-2);
        }

        foreach ($arr as $value) {
            $result .= $value;
        }
        return $result;
    }
}