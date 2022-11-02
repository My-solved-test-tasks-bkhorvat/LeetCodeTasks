<?php

class Solution
{

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid($s)
    {
        if (strlen($s) % 2) {
            return false;
        }

        while ($s) {
            $s = str_replace("()", "", $s);
            $s = str_replace("[]", "", $s);
            $s = str_replace("{}", "", $s);

            if ($cheked === $s) {
                return false;
            }
            $cheked = $s;

        }

        return true;
    }
}