<?php

//this solution work, but so long. On leetcode you can see time limit exception
class Solution
{

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s)
    {
        while ($s != "") {
            $strlenS = strlen($s);
            if ($strlenS <= $strlenLongPal) {
                break;
            }

            for ($i = 0; $i < $strlenS - $strlenLongPal; $i++) {
                $subStr = substr($s, 0, -$i ?: null);
                if ($subStr == strrev($subStr)) {
                    $longestPalindrom = $subStr;
                    $strlenLongPal = strlen($longestPalindrom);
                }
            }
            $s = substr($s, +1);

        }
        return $longestPalindrom;
    }

}