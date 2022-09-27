<?php

class Solution
{

    /**
     * @param String[] $strs
     * @return String
     */
    function longestCommonPrefix($strs)
    {
        $commonPrefix = "";

        $firstString = $strs[0];
        for ($i = 0; $i < strlen(min($strs)); $i++) {
            $amount = 0;
            for ($k = 1; $k < count($strs); $k++) {
                $nextString = $strs[$k];
                if ($firstString[$i] == $nextString[$i]) {
                    $amount++;
                } else {
                    break 2;
                }
            }
            if ($amount == count($strs) - 1) {
                $commonPrefix .= $firstString[$i];
            }
        }
        return $commonPrefix;
    }
}