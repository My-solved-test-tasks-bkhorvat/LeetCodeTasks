<?php

class Solution
{

    /**
     * @param String $s
     * @param String $p
     * @return Boolean
     */
    function isMatch($s, $p)
    {

        $p = "/" . $p . "/";

        if (preg_match($p, $s, $matches)) {
            foreach ($matches as $match) {
                if ($s == $match) {
                    return true;
                }
            }
        }

        return false;
    }
}