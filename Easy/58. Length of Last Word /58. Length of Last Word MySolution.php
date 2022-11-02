<?php

class Solution
{

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLastWord($s)
    {
        $s = trim($s);
        $arr = explode(" ", $s);
        return strlen(end($arr));
    }
}